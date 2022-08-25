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

Route::get('/oop', function () {
    return view('1010.oop');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/f1', function () {
    return view('0810.f1');
});
Route::get('/f2', function () {
    return view('0810.f2');
});
Route::get('/f3', function () {
    return view('0810.f3');
});