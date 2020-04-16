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

// Agregando autenticacion
Route::get('/', function () {
    return view('welcome');
});
//)->middleware('auth.basic');

// My first controller.
//Route::get('firstpage', 'MiPrimerController@index');

// With controller.
// type in browser: path/firstpage/create
//Route::resource('firstpage-two', 'MiPrimerController');

// Alias
//Route::get(
//    'firstpage',
//    [
//        'uses' => 'MiPrimerController@index',
//        'as' => 'my_alias'
//    ]
//);

//Route::get('otherview', 'MiPrimerController@otherview');

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
        //return 'Dashboard';
    })->name('dashboard');
});
