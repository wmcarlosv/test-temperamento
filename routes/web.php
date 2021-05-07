<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');
	Route::get('/profile','UsersController@profile')->name('profile');
	Route::put('/update-profile','UsersController@update_profile')->name('update_profile');
	Route::put('/change-password','UsersController@change_password')->name('change_password');
	Route::resource('users','UsersController');
	Route::resource('polls','PollsController');
	Route::resource('questions','QuestionsController');
	Route::resource('options','OptionsController');
	Route::resource('campaings','CampaingsController');
});


