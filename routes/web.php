<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//! Email
Route::get('/contact', 'MailController@index')->name('contact.index');
Route::post('/contact', 'MailController@send')->name('contact.send');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'PrivateController@index')->name('home');

// personal profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');

//Route::resource('/profile', 'MeController');



Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    //! Admin Home
    Route::get('/', 'HomeController@index')->name('acp');
    //! Users
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController');

    Route::get('/{any}', function () {
        return abort(404);
    });
});

Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');

/*
Route::get('/home', 'HomeController@index')->name('home');
*/






