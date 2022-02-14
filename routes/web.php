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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@index')->name('index');

Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/api/videogames/all', 'HomeController@showAll')->name('api.videogames.all');

Route::get('api/videogame/delete/{id}', 'HomeController@deleteVideogame')->name('api.videogame.delete');