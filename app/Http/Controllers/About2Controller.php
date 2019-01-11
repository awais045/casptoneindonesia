<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\About2;
class About2Controller extends Controller
{
    public function index()
    {
    	return view('admin.about2.index');
    }

    public function add()
    {
    	return view('admin.about2.add');
    }

    public function save(Request $r)
    {
    	$judul = $r->judul;
    	$deskripsi = $r->deskripsi;

    	$about2 = new About2;
    	$about2->judul = $judul;
    	$about2->deskripsi = $deskripsi;
    	$about2->save();
    	return redirect(url('/admin/about2/'));
    }

    public function edit($id)
    {
    	$about2 = About2::find($id);

    	return view('admin.about2.edit', compact('about2'));
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

    public function delete($id)
    {
    	$about2 = About2::find($id);
    	$about2->delete();

    	return redirect(url('/admin/about2/'));
    }
}
