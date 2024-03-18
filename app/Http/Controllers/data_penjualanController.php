<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_penjualan;
use App\Models\detailpenjualan;

class data_penjualanController extends Controller
{
    function data_penjualan(){
        $judul = "Data Penjualan";

        $data = DB::table('penjualan')->join('pelanggan','penjualan.PelangganID','=','pelanggan.PelangganID')->get();

        return view('data_penjualan', [
            'penjualan' => $data,
            'judul' => $judul,
        ]);
    }
    function detailpenjualan($id) {
        $penjualan = DB::table('penjualan')->where('PenjualanID', '=', $id)->join('pelanggan', 'penjualan.PelangganID', '=', 'pelanggan.PelangganID')->get();


        $detailPenjualan = DB:: table('detailpenjualan')->where('PenjualanID', '=', $id)->join('produk', 'detailpenjualan.ProdukID', '=', 'produk.ProdukID')->get();

        // return $detailPenjualan;

         return view("detail", ["penjualan" => $penjualan, 'detail' => $detailPenjualan]);
    } 
}
