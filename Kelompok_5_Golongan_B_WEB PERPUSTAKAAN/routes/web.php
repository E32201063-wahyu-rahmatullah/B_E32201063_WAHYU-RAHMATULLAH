<?php
// use App\Http\Controllers\frontend\PeminjamanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['namespace' => 'Frontend'], function()
// {
//     Route::resource('dashboard', 'DashboardController');
//     Route::resource('peminjaman', 'PeminjamanController');
    
// });

Auth::routes();
Route::group(['middleware' => ['web','auth']], function () {
	Route::group(['namespace' => 'Frontend'], function()
	{
		route::resource('dashboard', 'DashboardController');
		route::resource('peminjaman', 'PeminjamanController');
	});
});


// route::get('/Peminjaman',[PeminjamanController::class,'index']);
// route::get('/Peminjaman',[PeminjamanController::class,'index']);
// route::get('/Peminjaman',[PeminjamanController::class,'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
