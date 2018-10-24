<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Mahasiswa</title>
  </head>
  <body>
    <form method="POST" action="../../pdo/mahasiswa/insert.php">
      <table>
        <tr>
          <td>NPM</td>
          <td><input width="200px" name="npm" placeholder="Masukan NPM"></input></td>
        </tr>
        <tr>
          <td>Nama Mahasiswa</td>
          <td><input width="200px" name="nama_mahasiswa" placeholder="Masukan Nama Mahasiswa"></input></td>
        </tr>
        </table>
      <button type="submit">Simpan</button>
  </form>
  </body>
</html>
