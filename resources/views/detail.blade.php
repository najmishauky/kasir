<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
<style>
  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background:#59D5E0;
  }
  .table{
     box-shadow: 0 10px 15px black;
  }
  h1{
    text-shadow: yellow 8px 0 6px;
 }
 h3{
   text-shadow: yellow 8px 0 6px;
 }
</style>

<div class="detail">
<div class="container" style="color: aliceblue">
<br>
    <center><h1>Detail Penjualan</h1></center>
    <br>
    <br>
    <h3>Data Pelanggan</h3>
    <table class="table table-primary table-striped" >
      <thead>
        <tr>
          <th scope="col"><center><i class="fa-solid fa-calendar-days"></i> Tanggal</center></th>
          <th scope="col"><center><i class="fa-solid fa-address-card"></i> Nama Pelanggan</center></th>
          <th scope="col"><center><i class="fa-solid fa-money-bill"></i> Total Harga</center></th>
        </tr>
      </thead>
      @foreach($penjualan as $penjualan)
      <tbody>
        <tr>
          <td><center>{{$penjualan->TanggalPenjualan}}</center></td>
          <td><center>{{$penjualan->NamaPelanggan}}</center></td>
          <td><center>{{$penjualan->TotalHarga}}</center></td>
        </tr>
      </tbody>
      @endforeach
    </table>
    <br>
    <br>
    <h3>Produk Yang Di Beli</h3>
    <table class="table table-primary table-striped" >
      <thead>
        <tr>
          <th scope="col"><center><i class="fa-solid fa-file-signature"></i> Nama Produk</center></th>
          <th scope="col"><center>Harga</center></th>
          <th scope="col"><center><i class="fa-solid fa-arrow-up-wide-short"></i> QTY</center></th>
          <th scope="col"><center><i class="fa-solid fa-money-bill"></i> Subtotal</center></th>
        </tr>
      </thead>
      @foreach($detail as $detailpenjualan)
      <tbody>
        <tr>
          <td><center>{{$detailpenjualan->NamaProduk}}</center></td>
          <td><center>{{$detailpenjualan->Harga}}</center></td>
          <td><center>{{$detailpenjualan->JumlahProduk}}</center></td>
          <td><center>{{$detailpenjualan->SubTotal}}</center></td>
        </tr>
      </tbody>
      @endforeach
    </table>
    <br>
    <a href="/data_penjualan" type="button" class="btn btn-outline-danger"><i class="fa-solid fa-arrow-left"></i></a>

{{-- <table class="table table-dark table-striped" >
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">QTY</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  @foreach($detailPenjualan as $detailPenjualan)
  <tbody>
    <tr>
      <td>{{$detailPenjualan->NamaProduk}}</td>
      <td>{{$detailPenjualan->Harga}}</td>
      <td>{{$detailPenjualan->JumlahProduk}}</td>
      <td>{{$detailPenjualan->Subtotal}}</td>
    </tr>
  </tbody>
  @endforeach
</table> --}}
</div>
</div>

</body>
</html>

{{-- <table class="table table-dark table-striped-">
    <thead>
    
      <h1>{{ $produk }}</h1>

      <table class="center" border="1">
        <thead>
          <tr>
            <th scope="col">Produk ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
          </tr>
        </thead>
      
        
        
        @foreach($produk as $produk)
        <tr>
          <td>{{$produk->ProdukID}}</td>
          <td>{{$produk->NamaProduk}}</td>
          <td>{{$produk->Harga}}</td>
          <td>{{$produk->Stok}}</td>
        </tr>
        <td>
          <a href="hapus-stok/{{$produk->status}}">Hapus</a>|
          <a href="update-stok/{{$produk->status}}">Update</a>
        </td>
      
        @endforeach
      </table> --}}