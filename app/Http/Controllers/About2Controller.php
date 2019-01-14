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

    public function update(Request $r)
    {
    	$data = \App\About2::find(1);
        $data->pengantar1 = $r->pengantar1;
        $data->pengantar2 = $r->pengantar2;
        $data->pengantar3 = $r->pengantar3;
        $data->save();
        return redirect('admin/about2');
    }
}
