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


  <link rel="stylesheet" href="/resources/css/style.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <!-- boot -->
  <link rel="stylesheet" href="/resources/css/bootstrap-grid.min.css" />
  <script src="/resources/js/bootstrap.bundle.min.js"></script>
  <script src="/resources/js/jquery.js"></script>
  <!-- lightslider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
    <div class="container">

      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Logo SMADAR">
        <h1>SMA Darul Rohmah Laren</h1>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

</body>

</html>