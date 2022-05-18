<?php

if (isset($_POST['simpan'])) {

      // Memanggil Koneksi
      require_once "koneksi.php";

      // Inisialisasi
      $username = $_POST['username'];
      $password = $_POST['password'];

      //SQL
      $sql = "INSERT INTO user (username, password) VALUES ( :username, :password)";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":username", $username);
      $stmt->bindParam(":password", $password);
      $stmt->execute();

      //kembali ke tampil
      if($stmt){
      header("location:index.php");
}
else{
header("location:daftar.php");
}
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
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">



<h1>Daftar</h1>
    <form action="" method="POST">
<center>
<table>
<tr>        
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
    <td>&nbsp;</td>
    </tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
    <td>&nbsp;</td>
    </tr>
<tr>
    <td></td>
 <td> <input type="submit" value="Daftar" name="simpan">
</tr>
</table>
</center>
</form>  

    </div>

    <footer>
         <div class="footer">
Copyright &copy; 2022 - <a href="www.instagram.com">Sahabat.com</a>
</div>

         </footer>
</body>
</html>