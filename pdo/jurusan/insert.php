<?php
  require "../../config/koneksi.php";

  $query = $db->prepare("INSERT INTO jurusan(kode_jurusan, nama_jurusan) values(?, ?)");

  $query -> bindParam(1, $_POST["kode_jurusan"]);
  $query -> bindParam(2, $_POST["nama_jurusan"]);

  $query -> execute();

  if ($query){
      header('location: ../../view/jurusan');
  }

  $db = null;
