<?php

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel ORDER BY tanggal DESC limit 5");
$aktif = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <title>SMA DARUL ROHMAH LAREN</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- boot -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- lightslider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light navbarHome fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Logo SMADAR" />
                <h1>SMA Darul Rohmah Laren</h1>
            </a>

            <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">Beranda</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'galeri' ? 'active' : '' ?>" href="galeri.php">Galeri</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php">Artikel</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'ekskul' ? 'active' : '' ?>" href="ekskul.php">Ekstrakulikuler</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php">Guru</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" <?= $aktif == 'kontak' ? 'active' : '' ?>" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  -->

    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <section class="slideshow">
                <img class="satu" src="images/banner-shd.png" alt="Team Work" />
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>TEAMWORK</h1>
                    </div>
                    <h3>Teamwork In Our Endeavours</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="dua" src="images/banner-shd.png" alt="Team Work" />
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>humility</h1>
                    </div>
                    <h3>Humility In Our Accomplishments</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="tiga" src="images/banner-shd.png" alt="Team Work" />
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>Respect</h1>
                    </div>

                    <h3>Respect For One Another</h3>
                </div>
            </section>
        </li>

        <li class="item-a">
            <section class="slideshow">
                <img class="empat" src="images/banner-shd.png" alt="Team Work" />
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>Our Values</h3>
                        <h1>integrity</h1>
                    </div>

                    <h3>Integrity In Our Relationships</h3>
                </div>
            </section>
        </li>
    </ul>

    <div class="sambutan">
        <h1>WELCOME TO smadar</h1>
        <p>
            SMA DARUL ROHMAH LAREN merupakan sekolah terbagus dan terluas yang ada di Laren<br />
            Ada 5 jurusan yang siap mempersiapkan anda menjadi orang sukses
        </p>
    </div>


    <div class="kepsek">
        <div class="container">
            <img class="mt-4 ml-5" src="images/kepsek.jpg" alt="Kepala SMK N 2 Purbalingga" />

            <div class="visiMisi mt-5">
                <div class="visi">

                </div>

                <div class="misi">
                    <h5>Sambutan Kepala Sekolah</h5>
                    <p>Sebagai lembaga pendidikan, SMA Darul Rohmah Laren tanggap dengan perkembangan teknologi tersebut. Dengan dukungan SDM yang di miliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik.
                    </p>
                    <p>Teknologi Informasi Web khususnya, menjadi sarana bagi SMA Darul Rohmah Laren untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat.</p>
                </div>

            </div>


        </div>
        <div class="container">
            <div class="visiMisi">
                <div class="visi mt-3 col-2">
                    <h5 class="mt-3 mb-3">Visi</h5>
                    <h3>Terwujudnya peserta didik yang berprestasi dan berakhlak mulia.</h3>
                </div>
                <div class="misi mt-3 col-8">
                    <h5 class="mt-3 mb-3 ">Misi
                    </h5>

                    <p>
                        1.Melaksanakan pembelajaran dan bimbingan secara efektif dan efisien serta terpadu. <br>
                        2.Menumbuhkan sikap kompetitif antarsiswa untuk mencapai prestasi yang tinggi. <br>
                        3.Menumbuhkan sikap keunggulan secara intensif kepada seluruh warga sekolah. <br>
                        4.Menggali potensi sumber daya sekolah dan membangkitkan rasa ingin maju dan berinovasi. <br>
                        5.Mengoptmalkan seluruh potensi yang ada di sekolah secara terpadu. <br></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Artikel -->

    <div class="containerArtikelHome container">
        <h2>Artikel Terbaru</h2>

        <div class="artikelHome">

            <?php while ($artikel = mysqli_fetch_assoc($query)) : ?>
                <a href="detail_artikel.php?id=<?= $artikel['id'] ?>" class="perArtikelHome">
                    <img src="images/artikel/<?= $artikel['foto'] ?>" alt="Foto Artikel">
                    <h3><?= $artikel['judul'] ?></h3>
                    <small>Tanggal Upload : <span><?= date('d M y', strtotime($artikel['tanggal'])) ?></span></small>
                    <p><?= substr($artikel['isi'], 0, 125) . '...' ?></p>
                </a>
            <?php endwhile; ?>

        </div>
    </div>
    <!-- Akhir Artikel -->


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