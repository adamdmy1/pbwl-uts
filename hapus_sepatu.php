<?php

// Memanggil Koneksi
require_once "koneksi.php";

if (isset($_GET['id_sepatu'])) {

      // Inisialisasi
      $id_sepatu = $_GET['id_sepatu'];

      //SQL
      $sql = "DELETE FROM sepatu WHERE id_sepatu=:id_sepatu";

      //bindParam
      $stmt = $koneksi->prepare($sql);
      $stmt->bindParam(":id_sepatu", $id_sepatu);
      $stmt->execute();

      //array
      $success =  "Data berhasil dihapus!";
      header("location:sepatu.php");

}


?>

<p><?php echo $success; ?></p>
