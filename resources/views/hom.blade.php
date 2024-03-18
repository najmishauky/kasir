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
    /* background-image:url('{{asset ('foto/bg1.jpg')}}'); */
    margin:0;
    padding:0;
    font-family: sans-serif;
    background:#59D5E0;
  }
  h1{
        text-shadow: black 8px 0 6px;
        color: white;
      }
  h2{
    text-shadow: black 8px 0 6px;
    color: white;
  }
  .navbar-brand{
    text-shadow: yellow 5px 0 6px;
  }

 </style>

<nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-cash-register"></i>    Aplikasi Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
              <li><a class="dropdown-item" href="Barang"><i class="fa-solid fa-box-open"></i>  Produk</a></li>
              <li><a class="dropdown-item" href="tambah_produk"><i class="fa-solid fa-boxes-stacked"></i> Tambah Produk</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelanggan 
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="pelanggan"><i class="fa-solid fa-users-line"></i>  Pelanggan</a></li>
              <li><a class="dropdown-item" href="tambah_pelanggan"><i class="fa-solid fa-users-line"></i> Tambah Pelanggan</a></li>
            </ul>
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center><h2> ! Selamat Datang Di Aplikasi Kasir ! </h2></center>
  <br>
  <center><h1>SELAMAT BERBELANJA & BER TRANSAKSI <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></h1></center>
  <br>
  <br>
  <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>