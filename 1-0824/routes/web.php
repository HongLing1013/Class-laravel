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

Route::get('/f1', function () {

    $myArr = [1,2,3,4,5];
    $myName = 'kai';

    foreach($myArr as $key => $value){
        echo $value."<br>";
    }
    echo "hello $myName";
    // return view('f1');
});


// 路由葉面

Route::get('/f1_url', function () {
    return view('f1_view');
});
Route::get('/f2', function () {
    return view('f2');
});
Route::get('/f3', function () {
    return view('f3');
});
Route::get('/f4', function () {
    return view('f4');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/', function () {
    return view('welcome');
});
