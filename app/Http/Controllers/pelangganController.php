<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pelanggan;

class pelangganController extends Controller
{
    
    function pelanggan(){
        $judul = "Data Pelanggan";

        $data = pelanggan::all();

        return view('pelanggan', [
            'pelanggan' => $data,
            'judul' => $judul,
        ]);
    }

    function hapus($id)
     {
         echo $id;
         $deleted = DB::table('pelanggan')->where('PelangganID', $id)->delete();
         if ($deleted) {
             return redirect('/pelanggan');
         }
     }
}
