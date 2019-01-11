<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$data = \App\About::where('id',1)->first();
    	return view('admin.about')->with('data',$data);
    }

    public function save(Request $r){
    	$data = \App\About::find(1);
    	$data->pengantar1 = $r->pengantar1;
    	$data->pengantar2 = $r->pengantar2;
    	$data->pengantar3 = $r->pengantar3;
    	$data->save();
    	return redirect('admin/about');
    }
}
