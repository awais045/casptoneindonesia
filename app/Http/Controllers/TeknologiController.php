<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Teknologi;

class TeknologiController extends Controller
{
    public function index()
    {
    	return view('admin.teknologi.index');
    }

    public function add(Request $r)
    {	
    	return view('admin.teknologi.add');
    }

    public function save(Request $r)
    {
    	if (Input::hasFile('gambar')) {
      	$files = Input::file('gambar');
      	foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Teknologi::create([
        	'nama' => $r->input('nama'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/teknologi'));
    }

    public function edit($id)
    {
    	$teknologi = Teknologi::find($id);

    	return view('admin.teknologi.edit', compact('teknologi'));
    }

    public function delete($id)
    {
    	$teknologi = Teknologi::find($id);
    	$teknologi->delete();

    	return redirect('admin/teknologi');
    }
}
