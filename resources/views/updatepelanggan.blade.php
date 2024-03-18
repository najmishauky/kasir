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
<form action="{{ route('pelanggan.edit', $pelanggan->PelangganID)}}" class="form-signin" style="text-align: center;" method="POST" enctype="multipart/form-data">
      @method("POST")
      @csrf
      <h2 class="form-signin-heading"><center>UPDATE PELANGGAN</center></h2>
      <br>
      <br>
      <input type="text" class="form-control" name="NamaPelanggan" placeholder="nama produk" required="" autofocus="" />
      <br>
      <br>
      <textarea type="text" class="form-control" name="Alamat" placeholder="Alamat" required=""></textarea> 
      <br>
      <br>  
      <input type="number" class="form-control" name="NomorTelepon" placeholder="NomorTelepon" required=""/> 
      <br>
      <br>
      <input class="btn btn-primary" type="submit" value="Update"> 
      <br>
      <br>
  
    </form>
  </div>

</body>
</html>