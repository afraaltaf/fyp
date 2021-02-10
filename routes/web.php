<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/#
//practise

//Auth::routes();


Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/booking', 'App\Http\Controllers\PagesController@booking');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::resource('/posts', 'App\Http\Controllers\PostsController');
//Route::resource('/events', 'App\Http\Controllers\EventController');
Route::get('/events/create', 'App\Http\Controllers\EventController@create');
Route::get('/events/list', 'App\Http\Controllers\EventController@index');
Route::get('/welcome', function(){
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



Auth::routes(['verify' => true]);
Route::get('profile', function () {
return 'Verify test';
})->middleware('verified'); 






