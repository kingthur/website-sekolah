<?php

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT id, nama, alamat, foto, no_hp, mata_pelajaran FROM tbl_guru");
$aktif = 'guru';
$no = 1;
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

    <div class="title">
        <h1 class="text-center">GURU KAMI</h1>
        <p class="text-center">Tenaga Pengajar Yang Ada Di SMA Darul Rohmah Laren</p>
    </div>

    <div class="container guru col-8">
        <?php while ($guru = mysqli_fetch_assoc($query)) : ?>
            <a href="detail_guru.php?id=<?= $guru['id'] ?>" class="perGuru">
                <img src="images/guru/<?= $guru['foto'] ?>" alt="<?= $guru['nama'] ?>" width="100%" class="">
                <p><?= $guru['nama'] ?></p>
            </a>
        <?php endwhile; ?>
    </div>



    <style>
        .guru {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .guru .perGuru {
            width: 180px;
            height: 220px;
            position: relative;
            margin: 20px 10px;
            overflow: hidden;
            border-radius: 10px;
            -webkit-box-shadow: 0 5px 10px 3px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px 3px rgba(0, 0, 0, 0.2);
        }

        .guru .perGuru p {
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: -17px;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background-color: #0069d9;
            color: #fff;
            border-radius: 10px;
            -webkit-transform: translateY(50px);
            transform: translateY(50px);
        }

        .guru .perGuru::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;

            background-size: cover;
            background-position: top center;
            width: 100%;
            height: 100%;
        }

        .guru .perGuru::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-image: '';
            background-size: cover;
            background-position: top center;
            width: 100%;
            height: 100%;
        }

        .guru .perGuru:hover::before {
            opacity: 0.7;
        }

        .guru .perGuru:hover p {
            -webkit-transition: 0.5s;
            transition: 0.5s;
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

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