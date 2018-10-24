<?php
  require "../../config/koneksi.php";

  $query = $db->prepare("UPDATE jurusan SET 
  						 kode_jurusan = :kode_jurusan,
  						 nama_jurusan = :nama_jurusan
  						 WHERE id_jurusan = :id_jurusan
  						");

  $query -> bindParam(':kode_jurusan', $_POST["kode_jurusan"]);
  $query -> bindParam(':nama_jurusan', $_POST["nama_jurusan"]);
  $query -> bindParam(':id_jurusan', $_POST["id_jurusan"]);

  $query -> execute();

  if ($query){
      header('location: ../../view/jurusan');
  }

  $db = null;
