<?php

if (!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama = mysqli_escape_string($koneksi, $_POST['nama']);
// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = strtolower($nama);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../../images/ekskul/';

if ($_FILES['foto']['error'] == 0) {
	if ($_FILES['foto']['size'] < 10000000) {
		if (file_exists($tujuan . $nama_foto)) unlink($tujuan . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_ekskul (nama, foto) VALUES('$nama', '$nama_foto')") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
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
