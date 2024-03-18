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

    function edit($id){
        $id = (int) $id;        
        
        $affected = DB::table('produk')
              ->where('ProdukID', $id)
              ->update(['produk' => request()->NamaProduk]);

    return redirect('produk');
    }


    function update($id)
    {
        $produk = DB::table('produk')
            ->where('ProdukID', '=', $id)
            ->first();
        return view('/updatestok', ['produk' => $produk]);
    }

    function perbarui(Request $request, $id){

        $stok = $request->Stok;
        $harga = $request->Harga;
        $nama = $request->NamaProduk;
        DB::table('produk')->where('ProdukID', $id)
        ->update([
            'Stok' => $stok,
            'Harga' => $harga,
            'NamaProduk' => $nama,
        ]);
        return redirect("/Barang");
    }

    function hapus($id)
     {
         echo $id;
         $deleted = DB::table('produk')->where('ProdukID', $id)->delete();
         if ($deleted) {
             return redirect('/Barang');
         }
     }
}
