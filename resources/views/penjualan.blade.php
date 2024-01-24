<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<style>
  body {
    background-image:url('{{asset ('foto/bg1.jpg')}}');
  }
 </style>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-cash-register"></i>    Aplikasi Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="fa-solid fa-cash-register"></i>    Aplikasi Kasir</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hom"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produk
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="Barang"><i class="fa-solid fa-box-open"></i>  produk</a></li>
              <li><a class="dropdown-item" href="tambah_produk"><i class="fa-solid fa-boxes-stacked"></i> Tambah Produk</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelanggan
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="pelanggan"><i class="fa-solid fa-users-line"></i>  Pelanggan</a></li>
              <li><a class="dropdown-item" href="tambah_produk"><i class="fa-solid fa-users-line"></i> Tambah Pelanggan</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data_penjualan"><i class="fa-solid fa-file-invoice-dollar"></i> data Penjualan</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="penjualan"><i class="fa-solid fa-file-invoice-dollar"></i> Penjualan</a>
          </li>
          <br>
          <li class="nav-item">
          <li><a class="dropdown-item" href="login"><i class="fa-solid fa-user"></i>  Login</a></li>
          </li>
          <br>
          <li class="nav-item">
          <li><a class="dropdown-item" href="register"> <i class="fa-solid fa-user-plus"></i>    Register</a></li>
          </li>
          <br>
          
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <li class="nav-item">
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <br>
  <br>
  <br>
  <br>
  
<div class="container text-center">
  <div class="row">
    <div class="col">
      <form class="row g-3" Action='{{ url("/penjualan")}}' method="post">
        @method('POST')
        @CSRF
    <div class="col-md-6">
      <input type="hidden" name='idPenjualan' value='{{$idPenjualan}}'>
       <label for="inputNama" class="form-label">Nama Produk</label>
        <select class="form-select form-select-lg mb-3" aria-label="Large select example" name='produk'>
        <option selected>Pilih Produk</option>
         @foreach($produk as $produk)

        <option value={{$produk -> ProdukID}}>{{$produk -> NamaProduk}}</option>
         @endforeach
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputJumlah" class="form-label">Jumlah Produk</label>
    <input type="number" class="form-control" id="inputJumlah" name='qty'>
  </div>
  <div class="d-grid gap-2 d-md-block">
     <button type="submit" class="btn btn-outline-dark">Tambah <i class="fa-solid fa-square-plus"></i></button>
  </div>
  <br>
  <br>
  <br>
  <div class="col-12">
    <label for="inputNama" class="form-label">Nama Pelanggan</label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name='idPelanggan'>
        <option selected>enter your name</option>
        @foreach($pelanggan as $pelanggan)

        <option value={{$pelanggan -> PelangganID}}>{{$pelanggan -> NamaPelanggan}}</option>
        @endforeach
    </select>
  </div>
   </form>
    </div>
    <div class="col">
    <form class="row g-3">
      <div class="col-12">
        <br>
        <br>
        <br>
        <label for="inputTotal" class="form-label">Total Harga</label>
        <input type="text" class="form-control" id="inputTotal">
      </div>
    </form>
    </div>
  </div>

  <br>
  <br>
  <br>

  <div class="container">
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub-Total</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
     @foreach($detailpenjualan as $detailpenjualan)
    <tr>
      <td><center>{{ $detailpenjualan->NamaProduk }}</center></td>
      <td><center>{{ $detailpenjualan->Harga }}</center></td>
      <td><center>{{ $detailpenjualan->JumlahProduk }}</center></td>
      <td><center>{{ $detailpenjualan->SubTotal }}</center></td>
      <td><center>
        <a href="/pelanggan/{{$pelanggan->PelangganID}}" type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> </a> 
        <a type="button" class="btn btn-outline-success" href="#"><i class="fa-solid fa-pen-to-square"></i> </a>
      </center></td>
    </tr>
    @endforeach
  </tbody>
 </table>
</div>
<br>
<div class="d-grid gap-2 d-md-block">
  <button type="button" class="btn btn-outline-dark">Selesai  <i class="fa-solid fa-check"></i></button>
</div>
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>