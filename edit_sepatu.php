<?php

// Memanggil Koneksi
require_once "koneksi.php";

if (isset($_GET['id_sepatu'])) {

      // Inisialisasi
      $id_sepatu = $_GET['id_sepatu'];

      //SQL
      $sql = "SELECT * FROM sepatu WHERE id_sepatu=:id_sepatu";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":id_sepatu", $id_sepatu);
      $stmt->execute();

      //array
      $row = $stmt->fetch();
}

if (isset($_POST['simpan'])) {

      // Inisialisasi
      $nama_sepatu = $_POST['nama_sepatu'];
      $merk_sepatu = $_POST['merk_sepatu'];
      $harga = $_POST['harga'];

      //SQL
      $sql = "UPDATE sepatu SET nama_sepatu=:nama_sepatu, merk_sepatu=:merk_sepatu, harga=:harga WHERE id_sepatu=:id_sepatu";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":nama_sepatu", $nama_sepatu);
      $stmt->bindParam(":merk_sepatu", $merk_sepatu);
      $stmt->bindParam(":harga", $harga);
      $stmt->bindParam(":id_sepatu", $id_sepatu);
      $stmt->execute();

      //kembali ke tampil
      header("location:data_pembeli.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nama_sepatu="viewport" content="wid_sepatuth=device-wid_sepatuth, initial-scale=1.0">
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

    <h2>Edit Sepatu</h2> </br>
 
       <form method="post" action="">
            <table>
                  <tr>
                        <td>Nama Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="nama_sepatu" value="<?php echo $row['nama_sepatu']; ?>"></td>
                  </tr>
<tr>
    <td>&nbsp;</td>
    </tr>                  
                  <tr>
                        <td>Merk Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="merk_sepatu" value="<?php echo $row['merk_sepatu']; ?>"></td>
                  </tr>
<tr>
    <td>&nbsp;</td>
    </tr>                  
                  <tr>
                        <td>Harga Sepatu </td>
                        <td>:</td>
                        <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
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