<?php
$title = "Beranda - SMKN 4 Tasikmalaya";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Galeri</title>
     <link rel="stylesheet" href="style.css">
     <style>
      body {
        padding-top: 65px;
      }
     </style>
  </head>
  <body>

   <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="img/logo.png" alt="Logo SMKN 4 Tasikmalaya" width="40" height="40" class="me-2">
      <span class="fw-bold">SMKN 4 Tasikmalaya</span>
    </a>
    

    <div class="d-flex justify-content-end">
    <a class="navbar-brand" href="index.php">Beranda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="identitas.php">Identitas Sekolah</a></li>
            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
             <li><a class="dropdown-item" href="visi&misi.php">Visi&Misi</a></li>
          </ul>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-drak" href="#" id="kesiswaanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kesiswaan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="jurusan.php">Jurusan</a></li>
            <li><a class="dropdown-item" href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
            <li><a class="dropdown-item" href="prestasi.php">Prestasi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="organisasi.php">Organisasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-drak" href="galeri.php">Galeri</a>
        </li>
      </ul>

      </div>
    </div>
  </div>
</nav>



<!-- GALERI -->
<div class="container-fluid pt-5 pb-5" style="background-color:#f9fafb;">
  <div class="container">
    <h2 class="fw-bold mb-4 text-center">Galeri <span style="color:#2563eb;">Sekolah</span></h2>
      <p class="text-center">Dokumentasi kegiatan di SMK Negeri 4 Tasikmalaya</p>
    </div>

    <div class="row g-4">
      <!-- Foto 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galeri1.png" class="card-img-top img-fluid rounded-3" alt="Galeri 1" style="object-fit: cover; height: 250px;">
        </div>
      </div>

      <!-- Foto 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galer2.png" class="card-img-top img-fluid rounded-3" alt="Galeri 2" style="object-fit: cover; height: 250px;">
        </div>
      </div>

      <!-- Foto 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galeri3.png" class="card-img-top img-fluid rounded-3" alt="Galeri 3" style="object-fit: cover; height: 250px;">
        </div>
      </div>

      <!-- Foto 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galeri4.png" class="card-img-top img-fluid rounded-3" alt="Galeri 4" style="object-fit: cover; height: 250px;">
        </div>
      </div>

      <!-- Foto 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galeri5.png" class="card-img-top img-fluid rounded-3" alt="Galeri 5" style="object-fit: cover; height: 250px;">
        </div>
      </div>

      <!-- Foto 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 rounded-3 custom-blue">
          <img src="img/galerienam.png" class="card-img-top img-fluid rounded-3" alt="Galeri 6" style="object-fit: cover; height: 250px;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- kontak -->
<?php
// Data Kontak & Sosial Media
$kontak = [
  "telepon" => "0265312059",
  "email" => "info@smkn4-tsm.sch.id",
  "sosial" => [
    ["icon" => "fab fa-facebook fa-lg", "link" => "#"],
    ["icon" => "fab fa-instagram fa-lg", "link" => "#"],
    ["icon" => "fab fa-tiktok fa-lg", "link" => "#"],
    ["icon" => "fab fa-youtube fa-lg", "link" => "#"],
  ]
];

// Data Link Lainnya
$linkLainnya = [
  ["nama" => "Kemdikbud", "url" => "#"],
  ["nama" => "Dapodiknasmen", "url" => "#"],
  ["nama" => "PSMK", "url" => "#"],
  ["nama" => "Disdik Jabar", "url" => "#"],
];
?>

<footer class="pt-5 pb-3" style="background-color:#f9fafb; border-top:1px solid #e5e7eb;">
  <div class="container">
    <div class="row">

      <!-- Alamat -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Alamat</h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.39448189745!2d108.213!3d-7.351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3ASMKN4TSM!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1693550012345" 
          width="100%" 
          height="200" 
          style="border:0; border-radius:8px;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>

      <!-- Kontak -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Kontak</h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <p><i class="fas fa-phone-alt me-2"></i> <?= $kontak['telepon'] ?></p>
        <p><i class="fas fa-envelope me-2"></i> <?= $kontak['email'] ?></p>

        <h6 class="fw-bold mt-4">Media <span style="color:#2563eb;">Sosial</span></h6>
        <?php foreach ($kontak['sosial'] as $sosmed): ?>
          <a href="<?= $sosmed['link'] ?>" class="me-3 text-dark">
            <i class="<?= $sosmed['icon'] ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Link Lainnya -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Link <span style="color:#2563eb;">Lainnya</span></h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <ul class="list-unstyled">
          <?php foreach ($linkLainnya as $link): ?>
            <li><a href="<?= $link['url'] ?>" class="text-dark text-decoration-none"><?= $link['nama'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center mt-4 pt-3" style="border-top:1px solid #e5e7eb;">
    <p class="mb-0 text-muted">© <?= date("Y") ?>. SMK Negeri 4 Tasikmalaya.<br>All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
