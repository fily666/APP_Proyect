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

/*  URL del Home */

Route::get('/', 'WelcomeController@index')->name('/');

Route::get('/barberia', 'WelcomeController@viewbarberia')->name('Barberia');
Route::get('/tattoo', 'WelcomeController@viewtattoo')->name('Tattoo');
Route::get('/blog', 'WelcomeController@viewblog')->name('Blog');
Route::get('/contactanos', 'WelcomeController@viewcontact')->name('Contact');

/*  URL del login */
Auth::routes();

/*  URL del Admin */
/*  URL del Admin - todos los roles*/
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('citas', 'CitaController');
Route::resource('reportes', 'ReporteController');

/*  URL del Admin - Rol Admin*/
Route::group(['middleware' => 'admin'], function () {

    Route::resource('usuarios', 'UserController');
    Route::resource('portafolios', 'PortafolioController');
    Route::resource('expertos', 'ExpertoController');
    Route::resource('servicios', 'ServicioController');
});
