<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;

class BarangController extends Controller
{
    // function Barang(){
    //     return view('Barang');
    // }

    function Barang(){
        $judul = "Data Produk";

        $data = produk::all();

        return view('Barang', [
            'produk' => $data,
            'judul' => $judul,
        ]);
    }

    function update(){
        
    }

    // function tambahproduk(Request $request){

    //     $isi_pengaduan = $request->isi_laporan;

    //     DB::table('produk')->insert([
    //         'tgl_pengaduan'=> $,
    //         'nik' =>'001',
    //         'isi_laporan' => $isi_pengaduan,
    //         'foto' => '',
    //         'status' => '0'
    //     ]);

    //     return redirect('/pengaduan');
    //  }


    function hapus($id)
     {
         echo $id;
         $deleted = DB::table('produk')->where('ProdukID', $id)->delete();
         if ($deleted) {
             return redirect('/Barang');
         }
     }
}
