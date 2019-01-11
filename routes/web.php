<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('images') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/portofolio', function(){
	return view('portofolio');
});
Route::get('/service', function(){
	return view('service');
});
Route::get('/about', function(){
	return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'] , function(){
	Route::get('/', 'AdminController@index');
	Route::get('/kelebihan', 'AdminController@indexkelebihan');
	Route::get('/kelebihan/add', 'AdminController@addkelebihan');
	Route::post('/kelebihan/save', 'AdminController@savekelebihan');
	Route::get('/kelebihan/edit/{id}', 'AdminController@editkelebihan');
	Route::post('/kelebihan/update', 'AdminController@updatekelebihan');
	Route::get('/kelebihan/delete/{id}', 'AdminController@deletekelebihan');
	Route::get('/pelayanan', 'AdminController@indexpelayanan');
	Route::get('/pelayanan/add', 'AdminController@addpelayanan');
	Route::post('/pelayanan/save', 'AdminController@savepelayanan');
	Route::get('/pelayanan/edit/{id}', 'AdminController@editpelayanan');
	Route::post('/pelayanan/update', 'AdminController@updatepelayanan');
	Route::get('/pelayanan/delete/{id}', 'AdminController@deletepelayanan');
	Route::get('/portofolio', 'AdminController@indexportofolio');
	Route::get('/portofolio/add', 'AdminController@addportofolio');
	Route::post('/portofolio/save', 'AdminController@saveportofolio');
	Route::get('/portofolio/edit/{id}', 'AdminController@editportofolio');
	Route::post('/portofolio/update', 'AdminController@updateportofolio');
	Route::get('/portofolio/delete/{id}', 'AdminController@deleteportofolio');
	Route::get('about','AboutController@index');
	Route::post('about/save','AboutController@save');

	Route::get('/about2/', 'About2Controller@index');
	Route::get('/about2/add', 'About2Controller@add');
	Route::post('/about2/save', 'About2Controller@save');
	Route::get('/about2/edit/{id}', 'About2Controller@edit');
	Route::post('/about2/update', 'About2Controller@update');
	Route::get('/about2/delete/{id}', 'About2Controller@delete');

	Route::get('/newsletter/', 'NewsletterController@index');
	Route::get('/newsletter/edit/{id}', 'NewsletterController@edit');
	Route::get('/newsletter/delete/{id}', 'NewsletterController@delete');
	Route::get('/newsletter/add', 'NewsletterController@add');
	Route::post('/newsletter/update', 'NewsletterController@update');
	Route::post('/newsletter/save', 'NewsletterController@save');
});

Route::group(['prefix' => 'about'], function(){
	
	
	
	Route::get('/delete/{id}', 'About2Controller@delete');
});
