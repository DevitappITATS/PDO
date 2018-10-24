CREATE DATABASE pdo;

USE pdo;

CREATE TABLE jurusan(
	id_jurusan INT AUTO_INCREMENT,
	kode_jurusan VARCHAR(10) UNIQUE,
	nama_jurusan VARCHAR(50),
	
	PRIMARY KEY (id_jurusan)
);

CREATE TABLE mahasiswa(
	id_mahasiswa INT AUTO_INCREMENT,
	npm VARCHAR(20) UNIQUE,
	nama_mahasiswa VARCHAR(50),
	
	PRIMARY KEY (id_mahasiswa)
);


INSERT INTO jurusan(kode_jurusan, nama_jurusan) VALUES ('06', 'informatika');