<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="update_produk.css">
</head>
<body>
<style>
  body {
    font-family: sans-serif;
    background:#59D5E0;

    /* background-image:url('{{asset ('foto/bg1.jpg')}}'); */
  }
 </style>
<br>
<br>
<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
      @method("POST")
      @csrf
    <form class="form-signin" style="text-align: center;">       
      <h2 class="form-signin-heading"><center>TAMBAH PELANGGAN</center></h2>
      <br>
      <br>
      <input type="text" class="form-control" name="NamaPelanggan" placeholder="NamaPelanggan" required="" autofocus="" />
      <br>
      <br>
      <textarea type="text" class="form-control" name="Alamat" placeholder="Alamat" required=""></textarea> 
      <br>
      <br>  
      <input type="number" class="form-control" name="NomorTelepon" placeholder="NomorTelepon" required=""/> 
      <br>
      <br>
      <button type="submit" class="btn btn-primary">Tambah <i class="fa-solid fa-arrow-up-from-bracket"></i></button>  
      <br>
      <br>
      <a href="pelanggan" type="button" class="btn btn-outline-danger" ><i class="fa-solid fa-arrow-left"></i></a>      
    </form>
    </form>
  </div>
</body>
</html>