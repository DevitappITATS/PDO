<?php
	require '../../config/koneksi.php';

	$query = $db->prepare("SELECT * FROM jurusan");
	$query -> execute();
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
			<th> Kode Jurusan </th>
			<th> Nama Jurusan </th>
			<th> Edit </th>
			<th> Delete </th>
		</thead>
		<tbody>
			<?php while($row = $query->fetchObject()){ ?>
				<tr>
					<td> <?php echo $row->kode_jurusan ?> </td>
					<td> <?php echo $row->nama_jurusan ?> </td>
					<td><a class="button" href="edit.php?id=<?php echo $row->id_jurusan ?>"> Edit </a></td>
					<td><a class="button" href="../../pdo/jurusan/delete.php?id=<?php echo $row->id_jurusan ?>"> Hapus </a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>