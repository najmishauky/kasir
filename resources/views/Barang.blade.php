<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   
    <style>
      body {
        background-image: url('{{ asset('foto/bg1.jpg') }}');
      }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-cash-register"></i>  Aplikasi Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
            <a class="nav-link active" aria-current="page" href="penjualan"><i class="fas fa-file-invoice-dollar"></i> Penjualan</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login"><i class="fas fa-user"></i>  Login</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="register"><i class="fas fa-user-plus"></i> Register</a>
          </li>
          
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
          
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-right-from-bracket"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br>
<br>
<br>

<center><h1>{{ $judul }}</h1></center>
<br>

<div class="container">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col"><center>ID Produk</center></th>
        <th scope="col"><center>Nama Produk</center></th>
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
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-pen-to-square"></i></button>
          </center></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="container">
    <div class="wrapper">
    <form  class="form-signin"  style="text-align: center;">      
      <br>
      <h2 class="form-signin-heading">UPDATE PRODUK</h2>
      <br>
      <br>
      <input type="text" class="form-control" name="Nama Produk" placeholder="Nama Produk" required="" autofocus="" />
      <br>
      <br>
      <input type="number" class="form-control" name="Harga" placeholder="Harga" required=""/> 
      <br>
      <br>  
      <input type="number" class="form-control" name="Stok" placeholder="Stok" required=""/> 
      <br>
      <br>
      <button type="button" class="btn btn-success">UPDATE</button>     
    </form>
    <br>
    <br>
    </div>
    </div>
    </div>
  </div>
</div>


<br>
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>