<?php

if (!isset($_POST['ubah'])) header('Location: ubah.php');


require_once '../../koneksi.php';
$nama = mysqli_real_escape_string($koneksi, isset($_POST['nama']) ? $_POST['nama'] : '');
$id = $_GET['id'];

// persiapan upload foto

if ($_FILES['foto']['error'] == 0) {
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = strtolower($nama);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_ekskul = mysqli_query($koneksi, "SELECT foto FROM tbl_ekskul WHERE id = $id");
	$row = mysqli_fetch_assoc($query_ekskul);

	$nama_foto = $row['foto'];
}

$tujuan = '../../images/ekskul/';

if ($_FILES['foto']['error'] == 0) {
	if ($_FILES['foto']['size'] < 10000000) {
		if (file_exists('../../images/ekskul/' . $nama_foto)) unlink('../../images/ekskul/' . $nama_foto);
		if (file_exists('../../images/ekskul/' . $nama_foto)) unlink('../../images/ekskul/' . $nama_foto);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_ekskul SET nama = '$nama', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));
		if ($query) {
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
} else {
	$query = mysqli_query($koneksi, "UPDATE tbl_ekskul SET nama = '$nama', foto = '$nama_foto' WHERE id = $id") or die(mysqli_error($koneksi));

	if ($query) {
		$_SESSION['sukses'] = 'Data Berhasil Diubah!';
		header('Location: index.php');
	} else {
		$_SESSION['gagal'] = 'Data Gagal Diubah!';
		header('Location: index.php');
	}
}
