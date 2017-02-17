<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery-1.11.3.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<?php 

$qtyBukuGambar = $_POST['bukuGambar'];
$qtymouse = $_POST['mouse'];
$qtydisket = $_POST['disket'];

$qtytot = $qtyBukuGambar + $qtymouse + $qtydisket;

$totalBukuGambar = $qtyBukuGambar * 5000;
$totalMouse = $qtymouse * 20000;
$totalDisket = $qtydisket * 2500;

$totsub = $totalBukuGambar + $totalMouse + $totalDisket;

 ?>
<body>
<div class="container">
  <h2>Penjualan Barang</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Barang</th>
        <th>Harga</th>
        <th>Quantity</th>
        <th>Sub Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Buku Gambar</td>
        <td>Rp. 5,000</td>
        <td><?php echo $qtyBukuGambar; ?></td>
        <td><?php
            $angka = $totalBukuGambar;
            $jumlah_desimal ="2";
            $pemisah_desimal =".";
            $pemisah_ribuan =",";
            echo "Rp ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
        ?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mouse</td>
        <td>Rp. 20.000</td>
        <td><?php echo $qtymouse; ?></td>
        <td><?php
            $angka = $totalMouse;
            $jumlah_desimal ="2";
            $pemisah_desimal =".";
            $pemisah_ribuan =",";
            echo "Rp ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
        ?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Disket</td>
        <td>Rp. 2.500</td>
        <td><?php echo $qtydisket; ?></td>
        <td><?php
            $angka = $totalDisket;
            $jumlah_desimal ="2";
            $pemisah_desimal =".";
            $pemisah_ribuan =",";
            echo "Rp ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
        ?></td>
      </tr>
      <tr>
      <td>Total</td>
      <td></td>
      <td></td>
      <td><?php echo $qtytot; ?></td>
      <td><?php
            $angka = $totsub;
            $jumlah_desimal ="2";
            $pemisah_desimal =".";
            $pemisah_ribuan =",";
            echo "Rp ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
        ?></td>
      </tr>

    </tbody>
  </table>
</div>


</body>
</html>

