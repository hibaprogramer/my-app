<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController1 extends Controller
{
    function index(){
        return view('contracts');
    }
}

