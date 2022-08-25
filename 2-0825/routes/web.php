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

// 下午課程

Route::get('/eat/{name}/{num}',function ($name,$num){
    $date = [
        'name' => $name,
        'num' => $num
    ];
    return view('1300.eat',['data'=>$date]);
});

// url/{變數}

// php artisan route:list
// 兩個變數
Route::get('/greeting/{name}/{num}', function ($name,$num) {
    $str = "Hello $name , num => $num";
    return $str;
});

// 一個變數
Route::get('/greeting/{name}', function ($name) {
    $str = "Hello $name";
    return $str;
});

// 沒有變數
Route::get('/greeting', function () {
    return "Hello";
});




// 上午課程
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