<?php

$active = 'galeri';
require_once '../../koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_kategori_galeri");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Galeri - SMA Darul Rohmah Laren</title>
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
								Tambah Galeri
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="id_kategori">Kategori Galeri/Foto</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<?php while ($kategori = mysqli_fetch_assoc($query)) : ?>
										<option value="<?= $kategori['id'] ?>"><?= $kategori['nama_kategori'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="foto">Foto Utama</label>
								<input type="file" class="form-control-file" id="foto" placeholder="Foto Utama" autocomplete="off" required="required" name="foto">
							</div>
							<div class="form-group">
								<label for="foto">Foto 1</label>
								<input type="file" class="form-control-file" id="foto1" placeholder="Foto 1" autocomplete="off" name="foto1">
							</div>
							<div class="form-group">
								<label for="foto">Foto 2</label>
								<input type="file" class="form-control-file" id="foto2" placeholder="Foto Utama" autocomplete="off" name="foto2">
							</div>
							<div class="form-group">
								<label for="foto">Foto 3</label>
								<input type="file" class="form-control-file" id="foto3" placeholder="Foto Utama" autocomplete="off" name="foto3">
							</div>
							<div class="form-group">
								<label for="foto">Foto 4</label>
								<input type="file" class="form-control-file" id="foto4" placeholder="Foto Utama" autocomplete="off" name="foto4">
							</div>
							<div class="form-group">
								<label for="foto">Foto 5</label>
								<input type="file" class="form-control-file" id="foto5" placeholder="Foto Utama" autocomplete="off" name="foto5">
							</div>
							<div class="form-group">
								<label for="foto">Foto 6</label>
								<input type="file" class="form-control-file" id="foto6" placeholder="Foto Utama" autocomplete="off" name="foto6">
							</div>
							<div class="form-group">
								<label for="foto">Foto 7</label>
								<input type="file" class="form-control-file" id="foto7" placeholder="Foto Utama" autocomplete="off" name="foto7">
							</div>
							<div class="form-group">
								<label for="foto">Foto 8</label>
								<input type="file" class="form-control-file" id="foto8" placeholder="Foto Utama" autocomplete="off" name="foto8">
							</div>
							<div class="form-group">
								<label for="foto">Foto 9</label>
								<input type="file" class="form-control-file" id="foto9" placeholder="Foto Utama" autocomplete="off" name="foto9">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>

</html>