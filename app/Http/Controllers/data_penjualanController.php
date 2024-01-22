<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class data_penjualanController extends Controller
{
    function data_penjualan(){
        return view('data_penjualan');
    }
}
