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

Route::get('/', 'WelcomeController@index')->name('/');

Route::get('/barberia', 'WelcomeController@viewbarberia')->name('Barberia');
Route::get('/tattoo', 'WelcomeController@viewtattoo')->name('Tattoo');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('citas', 'CitaController');
Route::resource('reportes', 'ReporteController');



Route::group(['middleware' => 'admin'], function () {

    Route::resource('usuarios', 'UserController');
    Route::resource('portafolios', 'PortafolioController');
    Route::resource('expertos', 'ExpertoController');
    Route::resource('servicios', 'ServicioController');

});
