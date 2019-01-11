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
	Route::get('/kelebihan/save', 'AdminController@savekelebihan');
	Route::get('/kelebihan/edit/{id}', 'AdminController@editkelebihan');
	Route::get('/kelebihan/update', 'AdminController@updatekelebihan');
	Route::get('/kelebihan/delete/{id}', 'AdminController@deletekelebihan');
	Route::get('/pelayanan', 'AdminController@indexpelayanan');
	Route::get('/pelayanan/add', 'AdminController@addpelayanan');
	Route::get('/pelayanan/save', 'AdminController@savepelayanan');
	Route::get('/pelayanan/edit/{id}', 'AdminController@editpelayanan');
	Route::get('/pelayanan/update', 'AdminController@updatepelayanan');
	Route::get('/pelayanan/delete/{id}', 'AdminController@deletepelayanan');
	Route::get('/portofolio', 'AdminController@indexportofolio')
	Route::get('/portofolio/add', 'AdminController@addportofolio');
	Route::get('/portofolio/save', 'AdminController@saveportofolio');
	Route::get('/portofolio/edit/{id}', 'AdminController@editportofolio');
	Route::get('/portofolio/update', 'AdminController@updateportofolio');
	Route::get('/portofolio/delete/{id}', 'AdminController@deleteportofolio');
});
