<?php

?>
  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Jurusan</title>
  </head>
  <body>
  <form method="POST" action="../../pdo/mahasiswa/update.php">
      <input type="hidden" name="id_mahasiswa">
      <table>
        <tr>
          <td>Kode Jurusan</td>
          <td><input width="200px" name="npm" placeholder="Masukan Kode Jurusan" ></input></td>
        </tr>
        <tr>
          <td>Nama Jurusan</td>
          <td><input width="200px" name="nama_mahasiswa" placeholder="Masukan Nama Jurusan"></input></td>
        </tr>
        </table>
      <button type="submit">Simpan</button>
  </form>
  </body>
</html>
