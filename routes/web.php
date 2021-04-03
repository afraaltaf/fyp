<?php

namespace App\Http\Controllers;
use Auth;
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
//Route::get('/', function(){
//	return view ('welcome');
//});

//Route::get('/dashboard', function(){
	//return view ('dashboard');
//});
//Route::get('/event','EventController@index');

Route::get('/','FrontendController@index');


Route::get('/new-lesson/{tutorId}/{date}','FrontendController@show')->name('create.lesson');


Route::group(['middleware'=>['auth','parent']],function(){

	Route::post('/book/lesson','FrontendController@store')->name('booking.lesson');
   // Route::post('/book/lesson','FrontendController@update')->name('booking.lesson');
	Route::get('/my-booking','FrontendController@myBookings')->name('my.booking');

    //Route::post('/my-booking', 'FrontendController@destroy')->name('delete');
    Route::get('/my-booking/{id}/destroy', 'FrontendController@destroy')->name('destroy');
	Route::post('my-booking', 'FrontendController@destroy')->name('delete');

	
	Route::get('/user-profile','ProfileController@index');
	Route::post('/user-profile','ProfileController@store')->name('profile.store');
	Route::post('/profile-pic','ProfileController@profilePic')->name('profile.pic');
	Route::get('/my-tracker','FrontendController@myTracker')->name('my.tracker');


});


Route::get('/dashboard','DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['auth','admin']],function(){
	Route::resource('tutor','TutorController');
	Route::get('/parents','ParentRecController@index')->name('parent');
	Route::get('/parents/all','ParentRecController@allTimeLesson')->name('all.lessons');
	Route::get('/status/update/{id}','ParentRecController@toggleStatus')->name('update.status');
	Route::resource('subject','SubjectController');


});

Route::group(['middleware'=>['auth','tutor']],function(){

	Route::resource('lesson','LessonController');
	Route::post('/lesson/check','LessonController@check')->name('lesson.check');
	Route::post('/lesson/update','LessonController@updateTime')->name('update');

	Route::get('parent-today','TrackerController@index')->name('parents.today');

	Route::post('/tracker','TrackerController@store')->name('tracker');

	Route::get('/tracker/{userId}/{date}','TrackerController@show')->name('tracker.show');
	Route::get('/tracked-parents','TrackerController@parentsFromTracker')->name('tracked.parents');


});

// Route::post('/api/tutors','FrontendController@getTutors');
// Route::get('/api/tutors/today','FrontendController@tutorToday');




//practise

//Auth::routes();




//Route::resource('/posts', 'App\Http\Controllers\PostsController');
//Route::resource('/records', 'App\Http\Controllers\ChildController');
//Route::resource('/events', 'App\Http\Controllers\EventController');

//Route::get('/welcome', function(){
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'posts']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//});



Auth::routes(['verify' => true]);
Route::get('profile', function () 
{return 'Verify test';
})->middleware('verified'); 






