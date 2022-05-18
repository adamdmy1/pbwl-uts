<?php

// Memanggil Koneksi
require_once "koneksi.php";

if (isset($_GET['id_penjualan'])) {

      // Inisialisasi
      $id_penjualan = $_GET['id_penjualan'];

      //SQL
      $sql = "DELETE FROM penjualan WHERE id_penjualan=:id_penjualan";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":id_penjualan", $id_penjualan);
      $stmt->execute();

      //array
      $success =  "Data berhasil dihapus!";
      header("location:penjualan_sepatu.php");

}


?>

<p><?php echo $success; ?></p>
