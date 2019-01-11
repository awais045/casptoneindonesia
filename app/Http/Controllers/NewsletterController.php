<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Newsletter;

class NewsletterController extends Controller
{
   public function index()
   {
   	return view('admin.newsletter.index');
   }

   public function add()
   {
   	return view('admin.newsletter.add');
   }

   public function edit($id)
   {
   	$newsletter = Newsletter::find($id);

   	return view('admin.newsletter.edit', compact('newsletter'));
   }

   public function update(Request $r)
   {
   	$id = $r->id;
   	$email = $r->email1;

   	$newsletter = Newsletter::find($id);
   	$newsletter->email = $email;
   	$newsletter->save();

   	return redirect('admin/newsletter');
   }

   public function save(Request $r)
   {
   	$email1 = $r->email1;

   	$newsletter = new Newsletter;
   	$newsletter->email = $email1;
   	$newsletter->save();

   	return redirect()->back();
   }
}
