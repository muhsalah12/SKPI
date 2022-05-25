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

Route::get('/', 'FrontController@index');
Route::get('/penyedia-swab-test', 'FrontController@daftar_penyedia');
Route::get('/detail-penyedia-swab-test/{id}', 'FrontController@detail_penyedia');

Route::middleware(['authcheck'])->group(function() {
	Route::get('/login', 'LoginController@index');
	Route::post('/login/dologin', 'LoginController@doLogin');
});
Route::get('logout', 'LoginController@logout');
Route::middleware(['authlogedin'])->group(function(){
	Route::get('/dashboard', 'HomeController@index');

	// USER
	Route::get('/user', 'UserController@index');
	Route::get('/tambah-user', 'UserController@create');
	Route::post('/do-add-user', 'UserController@store');
	Route::get('/edit-user/{id}', 'UserController@show');
	Route::post('/do-update-user/{id}', 'UserController@update');
	Route::get('/delete-user/{id}', 'UserController@destroy');

	// JENIS SWAB TEST
	Route::get('/jenis-swab', 'JenisSwabController@index');
	Route::get('/tambah-jenis-swab', 'JenisSwabController@create');
	Route::post('/do-add-jenis-swab', 'JenisSwabController@store');
	Route::get('/edit-jenis-swab/{id}', 'JenisSwabController@show');
	Route::post('/do-update-jenis-swab/{id}', 'JenisSwabController@update');
	Route::get('/delete-jenis-swab/{id}', 'JenisSwabController@destroy');

	// JENIS PENYEDIA
	Route::get('/jenis-penyedia', 'JenisPenyediaController@index');
	Route::get('/tambah-jenis-penyedia', 'JenisPenyediaController@create');
	Route::post('/do-add-jenis-penyedia', 'JenisPenyediaController@store');
	Route::get('/edit-jenis-penyedia/{id}', 'JenisPenyediaController@show');
	Route::post('/do-update-jenis-penyedia/{id}', 'JenisPenyediaController@update');
	Route::get('/delete-jenis-penyedia/{id}', 'JenisPenyediaController@destroy');

	// KECAMATAN
	Route::get('/kecamatan', 'kecamatanController@index');
	Route::get('/tambah-kecamatan', 'kecamatanController@create');
	Route::post('/do-add-kecamatan', 'kecamatanController@store');
	Route::get('/edit-kecamatan/{id}', 'kecamatanController@show');
	Route::post('/do-update-kecamatan/{id}', 'kecamatanController@update');
	Route::get('/delete-kecamatan/{id}', 'kecamatanController@destroy');

	// PENYEDIA SWAB TEST
	Route::get('/penyedia-swab', 'PenyediaSwabController@index');
	Route::get('/tambah-penyedia-swab', 'PenyediaSwabController@create');
	Route::post('/do-add-penyedia-swab', 'PenyediaSwabController@store');
	Route::get('/edit-penyedia-swab/{id}', 'PenyediaSwabController@show');
	Route::post('/do-update-penyedia-swab/{id}', 'PenyediaSwabController@update');
	Route::get('/delete-penyedia-swab/{id}', 'PenyediaSwabController@destroy');

	#======================================= FRONT ==================================#



});

