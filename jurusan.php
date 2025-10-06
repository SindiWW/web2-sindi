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
   
    <title>Jurusan</title>
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


<!-- JURUSAN -->
<div class="container-fluid pt-5 pb-5" style="background-color:#f9fafb;">
  <div class="container">
    <h2 class="fw-bold mb-4 text-center">Konsentrasi <span style="color:#2563eb;">Keahlian</span></h2>

    <?php
    // Data jurusan bisa kamu ambil dari database nanti, untuk sekarang pakai array
    $jurusan = [
      [
        "img" => "img/tjkt.XeO8V4_I.png",
        "nama" => "Teknik Komputer dan Jaringan (TKJ)",
        "deskripsi" => "Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi. 
                        Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi server, dan troubleshooting perangkat jaringan."
      ],
      [
        "img" => "img/rpl.png",
        "nama" => "Pengembangan Perangkat Lunak dan Gim (PPLG)",
        "deskripsi" => "Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim. 
                        Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan proyek teknologi."
      ],
      [
        "img" => "img/tbsm.5YZNeyvV.png",
        "nama" => "Teknik Sepeda Motor (TSM)",
        "deskripsi" => "Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor, 
                        serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua."
      ],
      [
        "img" => "img/dkv.Btdc-HP2.png",
        "nama" => "Desain Komunikasi Visual (DKV)",
        "deskripsi" => "Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi, dan media komunikasi visual untuk berbagai kebutuhan industri kreatif."
      ],
      [
        "img" => "img/toi.BFD6ZBmB.png",
        "nama" => "Teknik Otomasi Industri (TOI)",
        "deskripsi" => "Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan sistem kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur."
      ]
    ];

    // Loop untuk menampilkan setiap jurusan
    foreach ($jurusan as $j) :
    ?>
      <div class="card mb-4 shadow-sm border-0 rounded-3">
        <div class="card-body d-flex align-items-center">
          <img src="<?= $j['img']; ?>" alt="<?= $j['nama']; ?>" class="me-4" style="width:80px; height:auto;">
          <div>
            <h5 class="fw-bold"><?= $j['nama']; ?></h5>
            <p class="mb-0 text-muted"><?= $j['deskripsi']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- TENTANG KAMI -->
<footer class="pt-5 pb-3" style="background-color:#f9fafb; border-top:1px solid #e5e7eb;">
  <div class="container">
     <h2 class="display-3" id="kontak"></h2>
    <div class="row">

      
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Alamat</h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.39448189745!2d108.213!3d-7.351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3ASMKN4TSM!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1693550012345" 
          width="100%" 
          height="200" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>

      
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Kontak</h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <p><i class="fas fa-phone-alt me-2"></i> 0265312059</p>
        <p><i class="fas fa-envelope me-2"></i> info@smkn4-tsm.sch.id</p>
        
        <h6 class="fw-bold mt-4">Media <span style="color:#2563eb;">Sosial</span></h6>
        <a href="#" class="me-3 text-dark"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="#" class="me-3 text-dark"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="#" class="me-3 text-dark"><i class="fab fa-tiktok fa-lg"></i></a>
        <a href="#" class="me-3 text-dark"><i class="fab fa-youtube fa-lg"></i></a>
      </div>

      
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Link <span style="color:#2563eb;">Lainnya</span></h5>
        <div class="mb-3" style="border-bottom:1px solid #e5e7eb;"></div>
        <ul class="list-unstyled">
          <li><a href="#" class="text-dark text-decoration-none">Kemdikbud</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Dapodiknasmen</a></li>
          <li><a href="#" class="text-dark text-decoration-none">PSMK</a></li>
          <li><a href="#" class="text-dark text-decoration-none">Disdik Jabar</a></li>
        </ul>
      </div>

    </div>
  </div>

  
  <div class="text-center mt-4 pt-3" style="border-top:1px solid #e5e7eb;">
    <p class="mb-0 text-muted">© 2025. SMK Negeri 4 Tasikmalaya. <br> All rights reserved.</p>
  </div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>