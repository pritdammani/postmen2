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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index',function(){
	return view('ad/index');
	return view('ad/draft');
	return view('ad/shedule');
});
Route::get('/draft',function(){
	return view('ad/draft');});

Route::get('/shedule',function(){
	return view('ad/index');});

Route::get('/temp', function () {
    return view('demo1/demo');
});

Route::get('/tempo', function () {
    return view('demo1/demo3');
});
