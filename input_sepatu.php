<?php

if (isset($_POST['simpan'])) {

      // Memanggil Koneksi
      require_once "koneksi.php";

      // Inisialisasi
      $nama_sepatu = $_POST['nama_sepatu'];
      $merk_sepatu = $_POST['merk_sepatu'];
      $harga = $_POST['harga'];

      //SQL
      $sql = "INSERT INTO sepatu (nama_sepatu, merk_sepatu, harga) VALUES (:nama_sepatu, :merk_sepatu, :harga)";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":merk_sepatu", $merk_sepatu);
      $stmt->bindParam(":nama_sepatu", $nama_sepatu);
      $stmt->bindParam(":harga", $harga);
      $stmt->execute();

      //kembali ke tampil
      header("location:sepatu.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="garis">
    <header class="kepala">
        <div class="clearfix">
            <div class="logo">
                <h1>Toko Sepatu Monza</h1>
            </div>

        </div>
        <div class="bagian-bawah">
            <ul class="menu">
                <li><a href="sepatu.php">Sepatu</a></li>
                <li><a href="penjualan_sepatu.php">Penjualan Sepatu</a></li>
                <li><a href="index.php"><font color="red" style="position: relative;left: 999px;">Logout</font></a></li>
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">

    <h2>Input Sepatu</h2> </br>
 
       <form method="post" action="">
            <table>
                  <tr>
                        <td>Jenis Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="nama_sepatu"></td>
                  </tr>
<tr>
    <td>&nbsp;</td>
    </tr>                  
                  <tr>
                        <td>Merk Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="merk_sepatu" ></td>
                  </tr>
<tr>
    <td>&nbsp;</td>
    </tr>                  
                  <tr>
                        <td>Harga Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="harga" ></td>
                  </tr>
<tr>
    <td>&nbsp;</td>
    </tr>                                                       
                  <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="SIMPAN"></td>
                  </tr>
            </table>
      </form>
  </div>
  <footer>
         <div class="footer">
Copyright &copy; 2022 - <a href="www.instagram.com">Sahabat.com</a>
</div>

         </footer>
</body>
</html>