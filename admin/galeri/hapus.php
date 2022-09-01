<?php

if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT foto,foto1,foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9  FROM tbl_galeri WHERE id = {$id}");
$row = mysqli_fetch_assoc($query);

if (file_exists("../../images/galeri/" . $row['foto'])) unlink("../../images/galeri/" . $row['foto']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto1'])) unlink("../../images/galeri/" . $row['foto1']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto2'])) unlink("../../images/galeri/" . $row['foto2']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto3'])) unlink("../../images/galeri/" . $row['foto3']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto4'])) unlink("../../images/galeri/" . $row['foto4']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto5'])) unlink("../../images/galeri/" . $row['foto5']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto6'])) unlink("../../images/galeri/" . $row['foto6']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto7'])) unlink("../../images/galeri/" . $row['foto7']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto8'])) unlink("../../images/galeri/" . $row['foto8']) or die('foto tidak bisa dihapus');
if (file_exists("../../images/galeri/" . $row['foto9'])) unlink("../../images/galeri/" . $row['foto9']) or die('foto tidak bisa dihapus');

$query = mysqli_query($koneksi, "DELETE FROM tbl_galeri WHERE id = {$id}");
if ($query) {
	$_SESSION['sukses'] = 'Data Berhasil Dihapus!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Dihapus!';
	header('Location: index.php');
}
