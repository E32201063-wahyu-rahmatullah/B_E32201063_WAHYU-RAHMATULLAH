<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WahyuController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Backend\PendidikanController;
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

// ini route sederhana contoh 1
route::get('/hello', function (){ 	
	return 'hello World';
});

// ini  route sederhana contoh 2
route::get('/belajar', function (){
	echo'<h1>Hello World</h1>';
	echo'<p> sedang belajar laravel</p>';
});

// ini route parameter 
route::get('page/{nomor}', function($nomor){
	return 'ini Halaman ke-' . $nomor;
});

//ini route untuk controller yang menggunakan beberapa method di dalam nya
route::get('user',[WahyuController::class,'index']);
route::resource('user',WahyuController::class);

// ini route dalam membuat view sederhana
route::get("/home", function()
	{return view("home");
});

//ini adalah bab minggu ke 5
route::group(['namespace' => 'Frontend'], function()
	{
		route::resource('home', 'HomeController');
	});

route::group(['namespace' => 'Backend'], function()
	{
		route::resource('dashboard', 'DashboardController');
	});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ini adalah route minggu ke 7
Auth::routes();

Route::group(['namespace' => 'Frontend'], function ()
{
	route::resource('home','HomeController');
});


route::group(['middleware' => ['web','auth']], function(){
	route::resource('home','HomeController');
	route::group(['namespace'=>'Backend'], function ()
	{	
	route::resource('dashboard', 'DashboardController');
	});
});

// route minggu ke 9
route::group(['middleware' => ['web','auth']], function () {
	Route::group(['namespace' => 'Backend'], function()
	{
		route::resource('dashboard', 'DashboardController');
		route::resource('pendidikan', 'PendidikanController');
	});
});

