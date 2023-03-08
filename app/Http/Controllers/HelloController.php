<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index (){
        echo "Halo bang";
    }

    public function Welcome (){
        echo "Halo Cuy";
    }

}
