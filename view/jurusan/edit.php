<?php
  require "../../config/koneksi.php";

  $query = $db->prepare("SELECT * FROM jurusan where id_jurusan = ?");
 
  $query -> bindParam(1, $_GET['id']);    

  $query -> execute();

  $row = $query->fetchObject();

?>
  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Jurusan</title>
  </head>
  <body>
  <form method="POST" action="../../pdo/jurusan/update.php">
      <input type="hidden" name="id_jurusan" value="<?php echo $row->id_jurusan ?>">
      <table>
        <tr>
          <td>Kode Jurusan</td>
          <td><input width="200px" name="kode_jurusan" placeholder="Masukan Kode Jurusan" value="<?php echo $row->kode_jurusan ?>"></input></td>
        </tr>
        <tr>
          <td>Nama Jurusan</td>
          <td><input width="200px" name="nama_jurusan" placeholder="Masukan Nama Jurusan" value="<?php echo $row->nama_jurusan ?>"></input></td>
        </tr>
        </table>
      <button type="submit">Simpan</button>
  </form>
  </body>
</html>
