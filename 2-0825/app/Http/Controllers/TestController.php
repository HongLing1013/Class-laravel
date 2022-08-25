<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

//php artisan make:controller TestController

class TestController extends Controller{
  public function testFun(){
    // dd('testFun ok');
    return view('1500.test');
  }
}
?>