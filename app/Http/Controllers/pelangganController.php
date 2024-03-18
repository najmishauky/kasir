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

         function update($id)
         {
             $pelanggan = DB::table('pelanggan')
                 ->where('PelangganID', '=', $id)
                 ->first();
             return view('updatepelanggan', ['pelanggan' => $pelanggan]);
         }
   
         function tampil($id){
           $pelanggan = DB::table('pelanggan')
               ->where('pelangganID', '=', $id)
               ->first();
           return view('updatepelanggan', ['pelanggan' => $pelanggan]);
         }
         
         function updatepelanggan(Request $request, $id){
             $nama = $request->NamaPelanggan;
             $alamat = $request->Alamat;
             $no = $request->NomorTelepon;
             DB::table('pelanggan')->where('PelangganID', $id)
             ->update([
                 'NamaPelanggan' => $nama,
                 'Alamat' => $alamat,
                 'NomorTelepon' => $no,
             ]);
             return redirect("/pelanggan");
         }
   
}
