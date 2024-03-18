<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class tambah_produkController extends Controller
{

    function dataproduk(){
        return view('tambah_produk');
    }

    function tambahproduk(Request $request){
        // return $request->all();
        
        $tambahproduk = $request->NamaProduk;
        $tambahharga = $request->Harga;
        $tambahstok = $request->Stok;


        DB::table('produk')->insert([
            'NamaProduk'=> $tambahproduk,
            'Harga' =>$tambahharga,
            'Stok' => $tambahstok,
            
        ]);

        return redirect('/Barang');
         }
}
