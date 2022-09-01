<?php

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id = $id");
$guru = mysqli_fetch_assoc($query);
$aktif = 'guru';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Guru SMA DARUL ROHMAH LAREN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- boot -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- lightslider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <?php require_once 'navbar.php'; ?>

    <!-- content -->
    <div class="row p-3 justify-content-center">
        <div class="col-md-8">
            <div class="title mb-3">
                Detail Guru - <b><?= $guru['nama'] ?></b>
            </div>
            <table class="table table-stripped">
                <tr>
                    <td><b>Foto</b></td>
                    <td>:</td>
                    <td><img src="images/guru/<?= $guru['foto'] ?>" alt="<?= $guru['nama'] ?>" width="200px" class="img-thumbnail"></td>
                </tr>
                <tr>
                    <td width="225px"><b>Nama</b></td>
                    <td>:</td>
                    <td><?= $guru['nama'] ?></td>
                </tr>
                <tr>
                    <td><b>NIP</b></td>
                    <td>:</td>
                    <td><?= $guru['nip'] ?></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td>
                        <?= $guru['jenis_kelamin'] == 'L' ? 'Laki Laki' : '' ?>
                        <?= $guru['jenis_kelamin'] == 'P' ? 'Perempuan' : '' ?>
                    </td>
                </tr>
                <tr>
                    <td><b>No Handphone</b></td>
                    <td>:</td>
                    <td><?= $guru['no_hp'] ?></td>
                </tr>
                <tr>
                    <td><b>Tempat Tanggal Lahir</b></td>
                    <td>:</td>
                    <td><?= $guru['tempat_lahir'] ?>, <?= $guru['tanggal_lahir'] ?></td>
                </tr>
                <tr>
                    <td><b>Mata Pelajaran</b></td>
                    <td>:</td>
                    <td><?= $guru['mata_pelajaran'] ?></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td><?= $guru['alamat'] ?></td>
                </tr>

            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="my-4 text-white text-centzer">Kontak</h4>

                    <div class="footerContactUs">
                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-envelope"></i>
                            <p class="text-white">smadarulrohmahlaren@yahoo.co.id</p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-phone-alt"></i>
                            <p class="text-white">(0322)390304</p>
                        </div>

                        <div class="perFooterContactUs">
                            <i class="fas text-white fa-road"></i>
                            <p class="text-white">Jl. KH. Hasyim Asyari No.52 Laren</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4 class="my-4 text-center text-white">About</h4>
                    <div class="footerAbout">
                        <a href="galeri.php" class="text-white">Galeri</a>
                        <a href="artikel.php" class="text-white">Artikel</a>
                        <a href="ekskul.php" class="text-white">Ekstrakulikuler</a>
                        <a href="guru.php" class="text-white">Guru</a>
                        <a href="kontak.php" class="text-white">Contact Us</a>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <h4 class="my-4 text-white">Newsletter</h4>
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="search" placeholder="Example@gmail.com" aria-label="Search" />
                            <button class="btn btn-primary btn-newsletter" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footerCopyright text-white">
        <p><i class="far fa-copyright"></i> 2022 &nbsp; </p>
    </div>

    <script src="resources/js/script.js"></script>
</body>

</html>