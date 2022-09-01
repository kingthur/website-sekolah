<?php
require_once '../../koneksi.php';

if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT tbl_ekskul.id, tbl_ekskul.nama, tbl_ekskul.foto FROM tbl_ekskul ");

$row = mysqli_fetch_assoc($query);
$active = 'master';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Ekstrakulikuler - SMA Darul Rohmah Laren</title>
	<link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>

<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Detail Ekstrakulikuler - <strong><?= $row['nama'] ?></strong>
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-stripped">
							<tr>
								<td><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="../../images/ekskul/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="25%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td>
									<a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Ubah</a>
									<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
									<a href="index.php" class="btn btn-secondary btn-sm">Kembali</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/datatables/datatables.min.js"></script>
	<script src="../../resources/datatables/datatable.js"></script>
</body>

</html>