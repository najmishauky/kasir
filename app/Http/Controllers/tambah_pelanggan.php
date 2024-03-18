<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class tController extends Controller
{
    function datapelanggan(){
        return view('tambah_pelanggan');
    }

    function tambahpelanggan(Request $request){
        // return $request->all();
        
        $tambahpelanggan = $request->NamaPelanggan;
        $tambahalamat = $request->Alamat;
        $tambahnomortelepon = $request->NomorTelepon;


        DB::table('pelanggan')->insert([
            'NamaPelanggan'=> $tambahpelanggan,
            'Alamat' =>$tambahalamat,
            'NomorTelepon' => $tambahnomortelepon,
            
        ]);

        return redirect('/pelanggan');
         }
}
