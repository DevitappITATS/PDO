<?php
  require "../../config/koneksi.php";

  $query = $db->prepare("DELETE FROM jurusan WHERE id_jurusan = :id_jurusan");

  $query -> bindParam(':id_jurusan', $_GET["id"]);

  $query -> execute();

  if ($query){
      header('location: ../../view/jurusan');
  }

  $db = null;
