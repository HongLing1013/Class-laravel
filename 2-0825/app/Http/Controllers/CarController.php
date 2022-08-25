<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

//php artisan make:controller TestController

class CarController extends Controller{
  public function carFun(){
    // dd('carFun ok');
    return view('1500.car');
  }
}
?>