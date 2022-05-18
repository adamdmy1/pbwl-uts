<?php

// Memanggil Koneksi
require_once "koneksi.php";

//SQL
$sql = "SELECT * FROM penjualan JOIN sepatu ON sepatu.id_sepatu=penjualan.id_sepatu JOIN kategori ON kategori.id_kategori=penjualan.id_kategori";

//Prepare
$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>
<style>
    table{
        background-color: blue;
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
                <li><a href="sepatu.php">Sepatu</a></li>
                <li><a href="penjualan_sepatu.php">Penjualan Sepatu</a></li>
                <li><a href="index.php" style="position: relative;left: 999px;"><font color="red">Logout</font></a></li>
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">

    <h2>Data Penjualan Sepatu</h2> </br><a href="input_penjualan.php">Input Penjualan Sepatu</a></br></br>
      
      <table border="1">
            <tr>

                  <th>No</th>
                  <th>Nama Pembeli</th>
                  <th>Barang Yang Dibeli</th>
                  <th>Kategori Sepatu</th>
                  <th>Harga Sepatu</th>
                  <th>Total</th>
                  <th colspan="2">Aksi</th>
                 
            </tr>
            <?php 
            $no =1;

            while ($row = $stmt->fetch()) {  
                ?>
                  <tr>
                        <td><?= $no++?>.</td>
                        <td><?php echo $row['nama_pembeli']; ?></td>
                        <td><?php echo $row['nama_sepatu']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td>Rp<?php echo number_format($row['harga'], 0, ',', '.');?>,-</td>
                        <td>Rp<?php echo number_format($row['harga'], 0, ',', '.');?>,-</td>                        
                        <td><a href="hapus_penjualan.php?id_penjualan=<?php echo $row['id_penjualan']; ?>">Hapus</a></td>                        
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