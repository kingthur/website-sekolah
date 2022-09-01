<?php

if (!isset($_POST['tambah'])) header('Location: tambah.php');


require_once '../../koneksi.php';
$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
$id_kategori = mysqli_real_escape_string($koneksi, isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$tanggal = uniqid(true);

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);
//Foto Utama
$nama_foto = $tanggal . '-';
$nama_foto = $nama_foto . strtolower($judul);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

// Foto 1 - 9
$foto1 = $tanggal . '.1-';
$foto1 = $foto1 . strtolower($judul);
$foto1 = str_replace(' ', '-', $foto1) . '.' . $ekstensi;

$foto2 = $tanggal . '.2-';
$foto2 = $foto2 . strtolower($judul);
$foto2 = str_replace(' ', '-', $foto2) . '.' . $ekstensi;

$foto3 = $tanggal . '.3-';
$foto3 = $foto3 . strtolower($judul);
$foto3 = str_replace(' ', '-', $foto3) . '.' . $ekstensi;

$foto4 = $tanggal . '.4-';
$foto4 = $foto4 . strtolower($judul);
$foto4 = str_replace(' ', '-', $foto4) . '.' . $ekstensi;

$foto5 = $tanggal . '.5-';
$foto5 = $foto5 . strtolower($judul);
$foto5 = str_replace(' ', '-', $foto5) . '.' . $ekstensi;

$foto6 = $tanggal . '.6-';
$foto6 = $foto6 . strtolower($judul);
$foto6 = str_replace(' ', '-', $foto6) . '.' . $ekstensi;

$foto7 = $tanggal . '.7-';
$foto7 = $foto7 . strtolower($judul);
$foto7 = str_replace(' ', '-', $foto7) . '.' . $ekstensi;

$foto8 = $tanggal . '.8-';
$foto8 = $foto8 . strtolower($judul);
$foto8 = str_replace(' ', '-', $foto8) . '.' . $ekstensi;

$foto9 = $tanggal . '.9-';
$foto9 = $foto9 . strtolower($judul);
$foto9 = str_replace(' ', '-', $foto9) . '.' . $ekstensi;



$asal = $_FILES['foto']['tmp_name'];
$asal1 = $_FILES['foto1']['tmp_name'];
$asal2 = $_FILES['foto2']['tmp_name'];
$asal3 = $_FILES['foto3']['tmp_name'];
$asal4 = $_FILES['foto4']['tmp_name'];
$asal5 = $_FILES['foto5']['tmp_name'];
$asal6 = $_FILES['foto6']['tmp_name'];
$asal7 = $_FILES['foto7']['tmp_name'];
$asal8 = $_FILES['foto8']['tmp_name'];
$asal9 = $_FILES['foto9']['tmp_name'];
$tujuan = '../../images/galeri/';

if ($_FILES['foto']['error'] == 0) {
	if ($_FILES['foto']['size'] < 10000000) {
		if (file_exists('../../images/galeri/' . $nama_foto)) unlink('../../images/galeri/' . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_galeri (tanggal, foto, foto1, foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9,  id_kategori) VALUES('$tanggal', '$nama_foto', '$foto1', '$foto2', '$foto3', '$foto4', '$foto5', '$foto6', '$foto7', '$foto8', '$foto9', $id_kategori)") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		move_uploaded_file($asal1, $tujuan . $foto1) or die('gagal upload foto');
		move_uploaded_file($asal2, $tujuan . $foto2) or die('gagal upload foto');
		move_uploaded_file($asal3, $tujuan . $foto3) or die('gagal upload foto');
		move_uploaded_file($asal4, $tujuan . $foto4) or die('gagal upload foto');
		move_uploaded_file($asal5, $tujuan . $foto5) or die('gagal upload foto');
		move_uploaded_file($asal6, $tujuan . $foto6) or die('gagal upload foto');
		move_uploaded_file($asal7, $tujuan . $foto7) or die('gagal upload foto');
		move_uploaded_file($asal8, $tujuan . $foto8) or die('gagal upload foto');
		move_uploaded_file($asal9, $tujuan . $foto9) or die('gagal upload foto');
		if ($query) {
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
}
