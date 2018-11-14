<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('home');
//});
//Route::get('/', function () {
//    return view('Registration');
//});
//Route::get('/','Home');
//Route::get('/', 'home@index');
//Route::get('/home', 'Registration@index');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/Registration', 'RegistrationController@index');
