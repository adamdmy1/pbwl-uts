<?php

// Memanggil Koneksi
require_once "koneksi.php";

//SQL
$sql = "SELECT * FROM sepatu";

//Prepare
$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>
<style>
    table{
        background-color: white;
        border-spacing: 1;
        margin: 10px;
        position: relative;
        
        width: 80%;
    }
        table th{
        
        margin: 0;
        height: 50px;
        
        font-family: 'Be Vietnam Pro', sans-serif;
    }
        table td{
            text-align: center;
        font-family: 'Be Vietnam Pro', sans-serif;
        padding: 10px;
    }
    a {
        text-decoration: none;
    }
</style>
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
                <li><a href="sepatu.php">Sepatu Monza</a></li>
                <li><a href="penjualan_sepatu.php">Penjualan Sepatu</a></li>
                <li><a href="index.php"><font color="blue" style="position: relative;left: 999px;">Logout</font></a></li>
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">

    <h2>Data Sepatu monza</h2> </br>
<a href="input_sepatu.php">Input Sepatu</a></br>
            
      <table border="1">
            <tr>

                  <th>No</th>
                  <th>Nama Sepatu</th>
                  <th>Merk Sepatu</th>
                  <th>Harga Sepatu</th>
                  <th colspan="2">Aksi</th>
                 
            </tr>
            <?php 
            $no =1;
            while ($row = $stmt->fetch()) { ?>
                  <tr>
                        <td><?= $no++?>.</td>
                        <td><?php echo $row['nama_sepatu']; ?></td>
                        <td><?php echo $row['merk_sepatu']; ?> </td>
                        <td>Rp<?php echo number_format($row['harga'], 0, ',', '.');?>,-</td>
                        <td><a href="edit_sepatu.php?id_sepatu=<?php echo $row['id_sepatu']; ?>">Edit</a></td>
                        <td><a href="hapus_sepatu.php?id_sepatu=<?php echo $row['id_sepatu']; ?>">Hapus</a></td>                        
                  </tr>
            <?php } ?>

      </table>


    </div>
    <footer>
         <div class="footer">
Copyright &copy; 2022 - <a href="www.instagram.com">Sahabat.com</a>
</div>

         </footer>
</body>
</html>