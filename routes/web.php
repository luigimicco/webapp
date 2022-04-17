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
 Pagine pubbliche
*********************************************/

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send')->name('contact.send');

Auth::routes(['register' => true]);

/********************************************
 Pagini accessibili dietro login
*********************************************/

// pagine accessibili agli utenti registrati
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/simple', 'SimpleController@index')->name('simple');

// profilo personale
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');

/********************************************
 Pagini accessibili solo ad admin
*********************************************/
Route::middleware('role:admin')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/acp', 'AdminController@index')->name('acp');;
    Route::get('/artisan/{action}', 'AdminController@artisan')->name('artisan');

    // shows a list of related users for the specified permission
    Route::get('/permissions/{permission}/users', 'PermissionController@users')->name('permissions.users');

    // toggle on enable/disable
    Route::patch('/users/{user}/enable', 'UserController@enableToggle')->name('users.enable');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('templates', 'TemplateController');


    // testa la gestione delle coda di email
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

    // tsta il modello susato per l'invio del contattp
    Route::get('testcontact', function () {
        $message = new  App\Models\Contact;
        $message->name = "Rossi Mario";
        $message->email= "info@nomail.com";
        $message->subject = "Test template per contatto";
        $message->message = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil nam commodi vitae optio quidem consectetur atque in repellat! Reiciendis, corporis nisi quis error sint laudantium dignissimos totam quas quia!";

        return new App\Mail\SendNewMail($message);
    });

    Route::get('/{any}', function () {
//        return abort(404);
        return redirect()->route('dashboard')->with('alert-message', 'Pagina non presente.')->with('alert-type', 'warning'); // view('guest.home');
    });
});
 

// rotte gestite da Vue router
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');

/*
Route::get('/{any?}', function () {
    return redirect()->route('dashboard')->with('alert-message', 'Pagina non presente.')->with('alert-type', 'warning'); // view('guest.home');
})->where('any', '.*');
*/





