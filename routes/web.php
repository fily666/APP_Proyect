<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'welcomeController@index')->name('/');

Route::get('/barberia', 'welcomeController@viewbarberia')->name('Barberia');
Route::get('/tattoo', 'welcomeController@viewtattoo')->name('Tattoo');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {

    Route::resource('usuarios', 'UserController');
    Route::resource('portafolios', 'PortafolioController');
    Route::resource('expertos', 'ExpertoController');
    Route::resource('servicios', 'ServicioController');

});
