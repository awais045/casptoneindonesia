<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\About2;
class About2Controller extends Controller
{
    public function index()
    {
    	$data = \App\About2::where('id',1)->first();
        return view('admin.about2.index')->with('data',$data);
    }

    public function save(Request $r)
    {
    	$data = \App\About2::find(1);
        $data->pengantar1 = $r->pengantar1;
        $data->pengantar2 = $r->pengantar2;
        $data->pengantar3 = $r->pengantar3;
        $data->save();
        return redirect('admin/about2');
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$judul = $r->judul;
    	$deskripsi = $r->deskripsi;

    	$about2 = About2::find($id);
    	$about2->judul = $judul;
    	$about2->deskripsi = $deskripsi;
    	$about2->save();
    	return redirect(url('/admin/about2/'));
    }
}
