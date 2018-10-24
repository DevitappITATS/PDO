<?php
	$host="localhost"; //host laptop bisa pakai 127.0.0.1 atau localhost
	$dbname="pdo"; // nama database
	$user="root"; // nama user dalam my sql
	$password=""; // password user, jika kosong beri string kosong
	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	  	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		if (!$db){
			echo "Koneksi Error";
		}
	}

	catch(PDOException $STH){
	  echo "<br>".$STH->getMessage();
	}

?>
