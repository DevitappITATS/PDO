<?php
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Table Jurusan</title>
  <style>
    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;

        text-decoration: none;
        color: initial;
    }
    </style>
</head>
<body>
  <a class="button" href="tambah.php">Tambah</a>
  <table border=1 >
    <thead>
      <th> NPM </th>
      <th> Nama Mahasiswa </th>
      <th> Edit </th>
      <th> Delete </th>
    </thead>
    <tbody>
      
        <tr>
          <td>  </td>
          <td>  </td>
          <td><a class="button" href="edit.php?id="> Edit </a></td>
          <td><a class="button" href="../../pdo/mahasiswa/delete.php?id="> Hapus </a></td>
        </tr>
      
    </tbody>
  </table>
</body>
</html>