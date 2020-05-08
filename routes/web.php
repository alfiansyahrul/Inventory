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
    return view('layouts.index');
});

// User Route
Route::get('/user', 'userController@list');
Route::get('/addUser', 'userController@addUser');
Route::post('/addNewUser', 'userController@addNewUser');
Route::get('/editUser/{id}', 'userController@editUser');
Route::post('/updateUser', 'userController@updateUser');
Route::get('/deleteUser/{id}', 'userController@deleteUser');

// Product Route
Route::get('/product', 'productController@list');
