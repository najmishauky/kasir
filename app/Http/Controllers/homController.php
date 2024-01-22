<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homController extends Controller
{
    function hom(){
        return view('hom');
    }
}
