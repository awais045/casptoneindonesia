<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Kelebihan;
use App\Pelayanan;
use App\Portofolio;
use App\Slideshow;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function indexkelebihan()
    {
        return view('admin.kelebihan.index');
    }

    public function addkelebihan()
    {
        return view('admin.kelebihan.add');
    }

    public function savekelebihan(Request $r)
    {

        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Kelebihan::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/kelebihan'));
}

    public function editkelebihan($id)
    {
        $kelebihan = Kelebihan::find($id);
        return view('admin.kelebihan.edit')->with('kelebihan',$kelebihan);
    }

    public function updatekelebihan(Request $r)
    {
        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Kelebihan::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/kelebihan'));
    }

    public function deletekelebihan($id)
    {
        $kelebihan = Kelebihan::find($id);
        $kelebihan->delete();
        return redirect(url('admin/kelebihan'));
    }

    public function indexpelayanan()
    {
        return view('admin.pelayanan.index');
    }

    public function addpelayanan()
    {
        return view('admin.pelayanan.add');
    }

    public function savepelayanan(Request $r)
    {
        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Pelayanan::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/pelayanan'));
    }

    public function editpelayanan($id)
    {
        $pelayanan = Pelayanan::find($id);
        return view('admin.pelayanan.edit')->with('pelayanan',$pelayanan);
    }

    public function updatepelayanan(Request $r)
    {
        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Pelayanan::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/pelayanan'));
    }

    public function deletepelayanan($id)
    {
        $pelayanan = Pelayanan::find($id);
        $pelayanan->delete();
        return redirect(url('admin/pelayanan'));
    }

    public function indexportofolio()
    {
        return view('admin.portofolio.index');
    }

    public function addportofolio()
    {
        return view('admin.portofolio.add');
    }

    public function saveportofolio(Request $r)
    {
        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Portofolio::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/portofolio'));
    }

    public function editportofolio($id)
    {
        $portofolio = Portofolio::find($id);
        return view('admin.portofolio.edit')->with('portofolio',$portofolio);
    }

    public function updateportofolio(Request $r)
    {
        if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Portofolio::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/portofolio'));
    }

    public function deleteportofolio($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();
        return redirect(url('admin/portofolio'));
    }

    public function indexslideshow()
    {
        return view('admin.slideshow.index');
    }

    public function addslideshow()
    {
        return view('admin.slideshow.add');
    }

    public function saveslideshow(Request $r)
    {
        if (Input::hasFile('gambar_slideshow')) {
      $files = Input::file('gambar_slideshow');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Slideshow::create([
            'gambar_slideshow' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/slideshow'));
    }

    public function editslideshow($id)
    {
        $slideshow = Slideshow::find($id);
        return view('admin.slideshow.edit')->with('slideshow',$slideshow);
    }

    public function updateslideshow(Request $r)
    {
        if (Input::hasFile('gambar_slideshow')) {
      $files = Input::file('gambar_slideshow');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Slideshow::create([
            'gambar_slideshow' => $gambar2,
          ]);
    }   
    }
        return redirect(url('admin/slideshow'));
    }

    public function deleteslideshow($id)
    {
        $slideshow = Slideshow::find($id);
        $slideshow->delete();
        return redirect(url('admin/slideshow'));
    }
}
