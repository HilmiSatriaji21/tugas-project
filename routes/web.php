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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('profil', 'ProfilController');
Route::Resource('tag', 'TagController');
Route::Resource('group', 'GroupController');
Route::Resource('akun', 'AkunController');
Route::Resource('postingan', 'PostinganController');
