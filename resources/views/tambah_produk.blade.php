<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<body>
<style>
  body {
    font-family: sans-serif;
    background:#59D5E0;
  }
  h2{
    text-shadow: white 8px 0 6px;
 }
 </style>
<br>
<br>
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
      @method("POST")
      @csrf
    <form class="form-signin" style="text-align: center;">       
      <h2 class="form-signin-heading"><center>TAMBAH PRODUK</center></h2>
      <br>
      <br>
      <input type="text" class="form-control" name="NamaProduk" placeholder="nama produk" required="" autofocus="" />
      <br>
      <br>
      <input type="number" class="form-control" name="Harga" placeholder="Harga" required=""/> 
      <br>
      <br>  
      <input type="number" class="form-control" name="Stok" placeholder="Stok" required=""/> 
      <br>
      <br>
      <button type="submit" class="btn btn-primary">Tambah <i class="fa-solid fa-arrow-up-from-bracket"></i></button> 
      <br>
      <br>
      <a href="Barang" type="button" class="btn btn-outline-danger" ><i class="fa-solid fa-arrow-left"></i></a>   
    </form>
    </form>
  </div>
</body>
</html>