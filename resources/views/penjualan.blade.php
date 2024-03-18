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
    /* background: linear-gradient( #eaedf0, #141e30); */
    font-family: sans-serif;
    background:#59D5E0;
  }
  .table{
        box-shadow: 0 10px 15px black;
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
          <a class="nav-link active" aria-current="page" href="penjualan"><i class="fa-solid fa-cart-shopping"></i> Penjualan</a>
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
  <div class="container">
    <div class="info">
      @if (session("info"))
    </div class="info">{{session("info")}}</div>
    @endif
  </div>
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

        <option value={{$produk -> ProdukID}}>{{ $produk -> NamaProduk}}</option>
         @endforeach
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputJumlah" class="form-label">Jumlah Produk</label>
    <input type="number" class="form-control" id="inputJumlah" name='qty'>
  </div>
  <div class="d-grid gap-2 d-md-block">
     <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
  </div>
  <br>
  <br>
  <br>
  <div class="col-12">
    <label for="inputNama" class="form-label">Nama Pelanggan</label>
    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name='idPelanggan'>
        <option selected></option>
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
      <div class="container">
          <table class="table">
          <thead class="table-primary">
            <tr>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Quantity</th>
              <th scope="col">Sub-Total</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php $total_harga = 0?>
            @foreach($detailpenjualan as $detailpenjualan)
            <tr>
              <td><center>{{ $detailpenjualan->NamaProduk }}</center></td>
              <td><center>Rp. {{ number_format($detailpenjualan->Harga) }}</center></td>
              <td><center>{{ $detailpenjualan->JumlahProduk }}</center></td>
              <td><center>Rp. {{ number_format($detailpenjualan->SubTotal) }}</center></td>
              

              <?php $total_harga = $total_harga + $detailpenjualan->SubTotal?>

            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </form>
    </div>
  </div>
  <br>
  <div class="card mt-3">
     <div class="card-body">
        <h1>Total Harga : {{ number_format($total_harga,0, ',' ,  '.') }}</h1>
     </div>
     <form class="d-grid gap-2 mt-3" action="{{url("/checkout")}}" method="POST">
      @method("POST")
      @csrf 
      <input type="hidden" name="idPenjualan" value="{{$idPenjualan}}">
      <input type="hidden" name="totalHarga" value="{{$total_harga}}">

      <input class="btn btn-primary" type="submit" name="submit" value="Checkout">
     </form>
    
  </div>
  <br>
  <br>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>