<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas Pemweb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery-1.11.3.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<form action="hitung.php" method="POST" class="form-horizontal" role="form">

<div class="container">
  <h2>Penjualan Barang</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga Satuan</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Buku Gambar</td>
        <td>Rp. 5000</td>
        <td>
          <div class="col-sm-2">
          <input type="text" class="form-control" name="bukuGambar" placeholder="">
      </div>
        </td>
      </tr>
      <tr>
        <td>Mouse</td>
        <td>Rp. 20.000</td>
        <td>
          <div class="col-sm-2">
          <input type="text" class="form-control" name="mouse" placeholder="">
      </div>
        </td>
      </tr>
      <tr>
        <td>Disket</td>
        <td>Rp. 2.500</td>
        <td>
          <div class="col-sm-2">
          <input type="text" class="form-control" name="disket" placeholder="">
        </td>
      </tr>
      <tr>
      <td>
      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Hitung</button>
      </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>


</form>

</div>
</body>
</html>