<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualanController extends Controller
{
    function penjualan(){
        $produk = DB::table("produk")->get();
        $pelanggan = DB::table("pelanggan")->get();

        $penjualan = DB::table("penjualan")->latest()->first();

        $idPenjualan = "";

        if (!$penjualan){//kalau data penjualan kosong
            $idPenjualan = '1';
        }
        else{
            $idPenjualan = $penjualan->PenjualanID;
        }

        $detailPenjualan=DB::table( "detailpenjualan") ->where ("PenjualanID", $idPenjualan)
        ->join ("produk", "detailpenjualan.ProdukID", "=", 'produk.ProdukID')
        ->get();

      
        return view("penjualan", ['detailpenjualan'=>$detailPenjualan, 'idPenjualan'=> $idPenjualan ,'produk' => $produk, 'pelanggan' => $pelanggan]);
    }

    function store(Request $request){

    $produk = DB::table('produk')->where('ProdukID', $request->produk)->first();
    //
    $DataPenjualan=DB::table('penjualan')->where('PenjualanID', $request->idPenjualan)->first();
    if(!$DataPenjualan){//kalau tidak ada data
        $penjualan = DB::table ("penjualan")->insert([
            'PenjualanID' => $request->idPenjualan,
            'TanggalPenjualan' => date ("Y-m-d"),
            'TotalHarga' => 0,
            'PelangganID'=> $request->idPelanggan,
            
        ]);
    }

        $detailPenjualan =DB::table ("detailpenjualan")->insert([
            'PenjualanID' => $request ->idPenjualan,
            'ProdukID' => $request ->produk,
            'JumlahProduk' =>$request->qty,
            'SubTotal' =>$request->qty * $produk->Harga
        ]);
    }
            
}
