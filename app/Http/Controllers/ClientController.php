<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
    	return view('admin.client.index');
    }

    public function add(Request $r)
    {	
    	return view('admin.client.add');
    }

    public function save(Request $r)
    {
    	if (Input::hasFile('gambar')) {
      	$files = Input::file('gambar');
      	foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Client::create([
        	'nama' => $r->input('nama'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/client'));
    }

    public function edit($id)
    {
    	$client = Client::find($id);

    	return view('admin.client.edit', compact('client'));
    }

    public function delete($id)
    {
    	$client = Client::find($id);
    	$client->delete();

    	return redirect('admin/client');
    }
}
