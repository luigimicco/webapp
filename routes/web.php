<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

/********************************************
 Pagini pubbliche
*********************************************/

// route per cronojob
Route::get('cronojob', function(){
    Artisan::call('queue:work', ['--stop-when-empty' => true]);
    dd('done');
});

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send')->name('contact.send');

Route::get('email-test', function(){
  
    $details = array(
        'email' => 'your_email@gmail.com',
        'title' => 'Titolo messaggio',
        'body' => 'prova di messaggio',
        'template' => 'Prova'
    );
  
    dispatch(new App\Jobs\EmailQueueJob($details));
  
    dd('done');
});



/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

/********************************************
 Pagini accessibili dietro login
*********************************************/

// pagine accessibili agli utenti
Route::get('/', 'PrivateController@index')->name('home');
Route::get('/simple', 'SimpleController@index')->name('simple');

// profilo personale
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');

/*
Route::put('/admin/acp', function () {
    //
})->middleware('role:admin');
*/


/********************************************
 Pagini accessibili solo ad admin
*********************************************/
Route::middleware('role:admin')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/acp', 'AdminController@index')->name('admin.acp');;
    Route::get('/artisan/{action}', 'AdminController@artisan')->name('admin.artisan');;

    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController');
    Route::resource('/templates', 'TemplateController');

    Route::get('/{any}', function () {
        return abort(404);
    });
});



Route::get('{any?}', function () {
    return redirect()->route('home')->with('alert-message', 'Pagina non presente.')->with('alert-type', 'warning'); // view('guest.home');
})->where('any', '.*');







