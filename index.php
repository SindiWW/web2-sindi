<?php
$title = "Beranda - SMKN 4 Tasikmalaya";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" 
     style="background: transparent; width:100%; z-index:10;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center text-white" href="index.php">
      <img src="img/logo.png" alt="Logo SMKN 4 Tasikmalaya" width="40" height="40" class="me-2">
      <span class="fw-bold">SMKN 4 Tasikmalaya</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF'])=='index.php'?'active text-white':'text-white' ?>" href="index.php">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="identitas.php">Identitas Sekolah</a></li>
            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
            <li><a class="dropdown-item" href="visi_misi.php">Visi & Misi</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="kesiswaanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kesiswaan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="jurusan.php">Jurusan</a></li>
            <li><a class="dropdown-item" href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
            <li><a class="dropdown-item" href="prestasi.php">Prestasi</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link text-white" href="organisasi.php">Organisasi</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="galeri.php">Galeri</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
// Data kepala sekolah
$kepsek = [
  "nama" => "Kurniawan S.Pd, M.Pd",
  "foto" => "img/bapa.JPG",
  "sambutan" => "
    Assalamualaikum Warahmatullahi Wabarakatuh

Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.

Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.

Wassalamu'alaikum Warahmatullahi Wabarakatuh.
  "
];

// Data informasi sekolah (bisa dari DB nanti)
$infoSekolah = [
  ["icon" => "fas fa-chalkboard-teacher", "jumlah" => 82, "label" => "Guru / Pendidik"],
  ["icon" => "fas fa-users", "jumlah" => 1500, "label" => "Siswa"],
  ["icon" => "fas fa-id-card", "jumlah" => 10, "label" => "Staf TU"],
  ["icon" => "fas fa-lightbulb", "jumlah" => 18, "label" => "Ekstrakurikuler"]
];
?>

<!-- Banner -->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6">SMK NEGERI 4 TASIKMALAYA</h4>
    <h3 class="display-1">Sekolah Pusat Keunggulan</h3>
    <form class="search-box d-flex justify-content-center mt-4" method="get" action="">
      <input type="text" name="q" class="form-control form-control-lg" placeholder="Apa yang ingin anda cari?" style="max-width:600px; border-radius:50px 0 0 50px; border:2px solid #0077ffff;">
      <button class="btn btn-primary btn-lg" type="submit" style="border-radius:0 50px 50px 0; color:white; font-weight:bold;">Cari</button>
    </form>
  </div>
</div>

<!-- Kepala Sekolah -->
<div class="container-fluid pt-5 pb-5">
  <div class="container section-box">
    <div class="row align-items-center mb-5">
      
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="p-3 rounded-3 shadow-sm" style="background-color:#dbeafe;">
          <img src="<?= $kepsek['foto'] ?>" 
               class="img-fluid rounded" 
               alt="Kepala Sekolah" 
               style="max-width:250px;">
        </div>
      </div>

      <div class="col-md-8">
        <div class="p-4 rounded-3 shadow-sm" style="background-color:#ffffff;">
          <h3 class="fw-bold" style="color:#1e40af;"><?= $kepsek['nama'] ?></h3>
          <p style="color:#374151;"><?= nl2br($kepsek['sambutan']); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// Data PHP Native
$infoSekolah = [
  ["icon" => "fas fa-chalkboard-teacher", "jumlah" => 82, "label" => "Guru / Pendidik"],
  ["icon" => "fas fa-users", "jumlah" => 1500, "label" => "Siswa"],
  ["icon" => "fas fa-id-card", "jumlah" => 10, "label" => "Staf TU"],
  ["icon" => "fas fa-lightbulb", "jumlah" => 18, "label" => "Ekstrakurikuler"]
];
?>

<!-- Informasi Sekolah -->
<section class="py-5 bg-light mt-4">
  <div class="container">
    <div class="row text-center g-4">
      <?php foreach ($infoSekolah as $info): ?>
        <div class="col-md-3">
          <div class="info-box p-4 shadow-sm rounded-3" style="background:#93c5fd; color:white;">
            <i class="<?= $info['icon'] ?> fa-2x mb-3"></i>
            <h3 class="counter fw-bold" data-target="<?= $info['jumlah'] ?>">0</h3>
            <p class="mb-0"><?= $info['label'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Script Counter -->
  <script>
    const counters = document.querySelectorAll('.counter');
    const speed = 500; // semakin kecil = lebih cepat

    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCount, 30);
        } else {
          counter.innerText = target;
        }
      };

      updateCount();
    });
  </script>
</section>


    <!-- Guru RPL -->
     <?php
// Data Guru PHP Native
$guru = [
  ["foto" => "img/satu.jpg", "alt" => "Pak Taupik"],
  ["foto" => "img/dua.jpg", "alt" => "Pak Zul"],
  ["foto" => "img/tiga.jpg", "alt" => "Pak Adi"],
  ["foto" => "img/tujuh.jpg", "alt" => "Pak Arif"],
  ["foto" => "img/sembilan.jpg", "alt" => "Guru 9"],
  ["foto" => "img/empat.jpg", "alt" => "Bu Imas"],
  ["foto" => "img/lima.jpg", "alt" => "Bu Lisye"],
  ["foto" => "img/enam.jpg", "alt" => "Guru 6"],
  ["foto" => "img/delapan.JPG", "alt" => "Guru 10"]
];

// Bagi data guru jadi 2 slide (misal 4 pertama, sisanya di slide kedua)
$slide1 = array_slice($guru, 0, 4);
$slide2 = array_slice($guru, 4);
?>

<!-- Guru RPL -->
<section class="py-5" style="background-color: #ffffff;">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Guru & Staf TU</h2>
    <div id="guruCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center g-2">
            <?php foreach ($slide1 as $g): ?>
              <div class="col-md-3">
                <img src="<?= $g['foto'] ?>" 
                     class="d-block mx-auto guru-img rounded-circle mb-3 img-fluid shadow-sm"
                     style="width: 180px; height: 220px; object-fit: cover; object-position: top;"
                     alt="<?= $g['alt'] ?>">
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center g-2">
            <?php foreach ($slide2 as $g): ?>
              <div class="col-md-2">
                <img src="<?= $g['foto'] ?>" 
                     class="d-block mx-auto guru-img rounded-circle mb-3 img-fluid shadow-sm"
                     style="width: 180px; height: 220px; object-fit: cover; object-position: top;"
                     alt="<?= $g['alt'] ?>">
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Navigasi -->
      <button class="carousel-control-prev" type="button" data-bs-target="#guruCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#guruCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
      </button>
    </div>
  </div>
</section>


<!-- Berita -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Berita Terbaru</h2>
      <p class="text-muted">Informasi terbaru seputar kegiatan SMK NEGERI 4 TASIKMALAYA</p>
    </div>

    <div class="row g-4">
      <?php
      // Data berita (bisa diganti ambil dari database)
      $berita = [
        [
          "img" => "img/BERITA1.jpg",
          "tanggal" => "Kamis, 12 Okt 2023",
          "judul" => "SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja",
          "ringkasan" => "Ringkasan singkat berita pertama ditampilkan di sini...",
          "link" => "berita.php"
        ],
        [
          "img" => "img/BERITA2.jpg",
          "tanggal" => "Senin 27 Feb 2023",
          "judul" => "Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo Creanova",
          "ringkasan" => "Ringkasan singkat berita kedua ditampilkan di sini...",
          "link" => "berita.php"
        ],
        [
          "img" => "img/BERITA3.jpeg",
          "tanggal" => "Senin, 20 Mei 2024",
          "judul" => "Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya, Ciptakan Bibit Keselamatan di Jawa Barat",
          "ringkasan" => "Ringkasan singkat berita ketiga ditampilkan di sini...",
          "link" => "berita.php"
        ],
      ];

      foreach ($berita as $b) :
      ?>
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm border-0 custom-blue">
            <img src="<?= $b['img'] ?>" class="card-img-top" alt="<?= $b['judul'] ?>">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><?= $b['tanggal'] ?></small>
              <h5 class="card-title fw-semibold"><?= $b['judul'] ?></h5>
              <p class="card-text text-muted"><?= $b['ringkasan'] ?></p>
              <a href="<?= $b['link'] ?>" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="berita.php" class="btn btn-outline-primary px-4">Lihat Semua Berita</a>
    </div>
  </div>
</section>
     
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
