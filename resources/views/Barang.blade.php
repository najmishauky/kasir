<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   
    
</head>
<body >

<style>
      body {
        background: #59D5E0;
        font-family: sans-serif;
        
      }
      .table{
        box-shadow: 0 10px 15px black;
      }
      h1{
        color: white;
        text-shadow: yellow 8px 0 6px;
      }
</style>

<nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-cash-register"></i>  Aplikasi Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="fas fa-cash-register"></i>    Aplikasi Kasir</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hom"><i class="fas fa-house"></i> Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produk
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="Barang"><i class="fas fa-box-open"></i>  Produk</a></li>
              <li><a class="dropdown-item" href="tambah_produk"><i class="fas fa-boxes-stacked"></i> Tambah Produk</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelanggan
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="pelanggan"><i class="fas fa-users-line"></i>  Pelanggan</a></li>
              <li><a class="dropdown-item" href="tambah_pelanggan"><i class="fas fa-users-line"></i> Tambah Pelanggan</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="penjualan"><i class="fa-solid fa-cart-shopping"></i> Penjualan</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login"><i class="fas fa-user"></i>  Login</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="register"><i class="fas fa-user-plus"></i> Register</a>
          </li>
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
            <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Logout</button>
          </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<div class="container">
<center><h1>{{ $judul }}</h1></center>
<br>
<br>
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col"><center><i class="fa-regular fa-id-badge"></i> ID Produk</center></th>
        <th scope="col"><center><i class="fa-solid fa-file-signature"></i> Nama Produk</center></th>
        <th scope="col"><center>Harga</center></th>
        <th scope="col"><center>Stok</center></th>
        <th scope="col"><center>Aksi</center></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach($produk as $produk)
        <tr>
          <th scope="row"><center>{{ $produk->ProdukID }}</center></th>
          <td><center>{{ $produk->NamaProduk }}</center></td>
          <td><center> {{ number_format($produk->Harga) }}</center></td>
          <td><center>{{ $produk->Stok }}</center></td>
          <td><center>
            <a href="/Barang/{{$produk->ProdukID}}" type="button" class="btn btn-outline-danger" ><i class="fas fa-trash"></i></a> 
            <a href="/updatestok/{{$produk->ProdukID}}" type="button" class="btn btn-outline-success" ><i class="fa-solid fa-pen-to-square"></i></a>
          </center></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<br>
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>