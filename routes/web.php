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

Route::get('/register', 'Auth\AuthController@registerUser')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser')->name('save.user');

Route::get('/view', 'Auth\AuthController@userView')->name('view');
Route::get('/viewmember/{id}', 'Auth\AuthController@usermView')->name('viewm');
Route::get('/editUser/{id}', 'Auth\AuthController@edituser')->name('edit.user');
Route::post('/updateUser', 'Auth\AuthController@updateuser')->name('update.user');
Route::get('/deleteUser/{id}', 'Auth\AuthController@deleteuser')->name('delete.user');






