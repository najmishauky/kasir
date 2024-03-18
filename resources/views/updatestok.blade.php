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
<form action='{{url("updatestok/$produk->ProdukID")}}' class="form-signin" style="text-align: center;" method="POST" enctype="multipart/form-data">
      @method("PUT")
      @csrf
      <h2 class="form-signin-heading"><center>UPDATE PRODUK</center></h2>
      <br>
      <br>
      <input type="text" class="form-control" name="NamaProduk" placeholder="nama produk" required="" autofocus=""  value="{{ $produk->NamaProduk }}"/>
      <br>
      <br>
      <input type="number" class="form-control" name="Harga" placeholder="Harga" required=""  value="{{ $produk->Harga }}"/> 
      <br>
      <br>  
      <input type="number" class="form-control" name="Stok" placeholder="Stok" required="" value="{{ $produk->Stok }}"/> 
      <br>
      <br>
      <input class="btn btn-primary" type="submit" value="Update"> 
      <br>
      <br>
  
    </form>
  </div>

</body>
</html>