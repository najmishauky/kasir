<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="update_produk.css">
</head>
<body>
<style>
  body {
    background-image:url('{{asset ('foto/bg1.jpg')}}');
  }
 </style>

<div class="wrapper">
    <form class="form-signin" style="text-align: center;">       
      <h2 class="form-signin-heading">TAMBAH PRODUK</h2>
      <input type="text" class="form-control" name="Nama Produk" placeholder="Nama Produk" required="" autofocus="" />
      <br>
      <br>
      <input type="number" class="form-control" name="Harga" placeholder="Harga" required=""/> 
      <br>
      <br>  
      <input type="number" class="form-control" name="Stok" placeholder="Stok" required=""/> 
      <br>
      <br>
      <button type="submit" class="btn btn-success">TAMBAH</button>     
    </form>
  </div>
</body>
</html>