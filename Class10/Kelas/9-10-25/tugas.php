<?php
// ===============================================
//  DATA SEKOLAH SMP NEGERI 23 DEPOK
// ===============================================

// Navbar
$judulNavbar = "SMPN 23 Depok";
$nav = ["Beranda", "Tentang", "Kegiatan", "Prestasi", "Kontak"];

// Carousel
$carousel = [
    ["img/depansekolah.jpg", "Selamat Datang di SMPN 23 Depok", "Sekolah Ramah, Cerdas, dan Berkarakter"],
    ["img/upacara.jpg", "Semangat Kebersamaan", "Menumbuhkan Jiwa Nasionalisme dan Disiplin"],
    ["img/labkom.jpg", "Fasilitas Lengkap", "Mendukung Pembelajaran Berbasis Teknologi"]
];

// Tentang Sekolah
$visi = "
<ul>
    <li>Menjadi sekolah unggulan dalam prestasi dan karakter.</li>
    <li>Mencetak generasi cerdas, kreatif, dan berakhlak mulia.</li>
    <li>Mewujudkan lingkungan belajar yang hijau dan inklusif.</li>
</ul>
";

$misi = "
<ul>
    <li>Menyelenggarakan pembelajaran aktif, inovatif, dan menyenangkan.</li>
    <li>Mengembangkan potensi siswa dalam bidang akademik dan non-akademik.</li>
    <li>Menanamkan nilai religius, disiplin, dan tanggung jawab.</li>
    <li>Meningkatkan kompetensi guru sesuai perkembangan IPTEK.</li>
</ul>
";

// Data Sekolah
$logo = "img/logo23.png";
$namaSekolah = "SMP NEGERI 23 DEPOK";
$npsn = "20239045";
$akreditasi = "A (Unggul)";
$alamat = "Jl. Keadilan Raya No. 45, Kel. Bakti Jaya, Kec. Sukmajaya, Kota Depok";
$telepon = "(021) 7788 2301";
$email = "smpn23depok@sch.id";
$tahunBerdiri = "1992";
$kepalaSekolah = "Drs. H. Suparman, M.Pd.";

// Kegiatan Sekolah
$judulKegiatan = "SMPN 23 Depok Gelar Festival Literasi 2025";
$tanggalKegiatan = "10 September 2025";
$kategoriKegiatan = "Kegiatan Siswa";
$fotoKegiatan = "img/festliterasi.jpg";
$deskripsiKegiatan = "
Festival Literasi SMPN 23 Depok tahun ini berlangsung meriah dengan berbagai kegiatan seperti lomba menulis puisi, pidato bahasa Inggris, dan pameran karya siswa.
Kegiatan ini diikuti seluruh siswa kelas 7–9 dengan penuh semangat.
Menurut $kepalaSekolah, kegiatan ini menjadi ajang penting untuk menumbuhkan budaya literasi sejak dini.
";

// Prestasi
$judulPrestasi = "Tim Robotik SMPN 23 Depok Raih Juara 1 Tingkat Provinsi";
$tanggalPrestasi = "22 Juli 2025";
$fotoPrestasi = "img/robotik.jpg";
$pewarta = "Aulia Fitri, S.Pd.";
$ceritaPrestasi = "
Tim robotik SMPN 23 Depok berhasil menjuarai lomba Robotik Cerdas tingkat Provinsi Jawa Barat.
Mereka menciptakan robot penyortir sampah otomatis berbasis AI yang diapresiasi dewan juri atas inovasi dan kreativitasnya.
Prestasi ini menjadi bukti bahwa siswa SMPN 23 Depok mampu bersaing di era digital dengan semangat belajar tinggi dan kerja tim yang solid.
";

// Kontak
$mapsEmbed = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.567543..."; // ganti sesuai maps asli sekolah
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulNavbar ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body { background-color: #f8fafc; }
        .navbar { background-color: #e3f2fd; }
        .section-title { color: #0d6efd; font-weight: 700; }
        footer { background: #0d6efd; color: white; padding: 20px 0; }
    </style>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#"><?= $judulNavbar ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav ms-auto">
        <?php foreach($nav as $item): ?>
          <a class="nav-link" href="#<?= strtolower($item) ?>"><?= $item ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</nav>

<!-- CAROUSEL -->
<section id="<?= strtolower($nav[0]) ?>">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach($carousel as $i => $slide): ?>
      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
        <img src="<?= $slide[0] ?>" class="d-block w-100" alt="slide<?= $i ?>" style="max-height:520px; object-fit:cover;">
        <div class="carousel-caption bg-dark bg-opacity-50 rounded">
          <h4><?= $slide[1] ?></h4>
          <p><?= $slide[2] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</section>

<!-- TENTANG SEKOLAH -->
<section id="<?= strtolower($nav[1]) ?>" class="py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title">Tentang Sekolah</h2>
      <p class="text-muted">Profil Singkat <?= $namaSekolah ?></p>
    </div>

    <div class="row align-items-center">
      <div class="col-md-5 text-center">
        <img src="<?= $logo ?>" class="img-fluid rounded-3 shadow-sm" alt="logo sekolah" style="max-height:200px;">
        <h5 class="fw-bold mt-3"><?= $namaSekolah ?></h5>
        <p><?= $alamat ?></p>
      </div>
      <div class="col-md-7">
        <div class="accordion shadow-sm" id="infoAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#visi">Visi</button></h2>
            <div id="visi" class="accordion-collapse collapse show">
              <div class="accordion-body"><?= $visi ?></div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#misi">Misi</button></h2>
            <div id="misi" class="accordion-collapse collapse">
              <div class="accordion-body"><?= $misi ?></div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <p><strong>Kepala Sekolah:</strong> <?= $kepalaSekolah ?></p>
          <p><strong>NPSN:</strong> <?= $npsn ?> | <strong>Akreditasi:</strong> <?= $akreditasi ?></p>
          <p><strong>Telepon:</strong> <?= $telepon ?> | <strong>Email:</strong> <?= $email ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KEGIATAN -->
<section id="<?= strtolower($nav[2]) ?>" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title">Kegiatan Sekolah</h2>
    </div>
    <div class="card shadow border-0">
      <img src="<?= $fotoKegiatan ?>" class="card-img-top" alt="kegiatan">
      <div class="card-body">
        <h4 class="fw-semibold"><?= $judulKegiatan ?></h4>
        <p class="text-muted"><?= $tanggalKegiatan ?> | <?= $kategoriKegiatan ?></p>
        <p><?= $deskripsiKegiatan ?></p>
      </div>
    </div>
  </div>
</section>

<!-- PRESTASI -->
<section id="<?= strtolower($nav[3]) ?>" class="py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title">Prestasi Sekolah</h2>
    </div>
    <div class="card shadow border-0">
      <img src="<?= $fotoPrestasi ?>" class="card-img-top" alt="prestasi">
      <div class="card-body">
        <h4 class="fw-semibold"><?= $judulPrestasi ?></h4>
        <p class="text-muted"><?= $tanggalPrestasi ?> | Pewarta: <?= $pewarta ?></p>
        <p><?= $ceritaPrestasi ?></p>
      </div>
    </div>
  </div>
</section>

<!-- KONTAK -->
<section id="<?= strtolower($nav[4]) ?>" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-3">Kontak & Lokasi</h2>
    <p class="mb-3">Kamu dapat mengunjungi kami di alamat berikut:</p>
    <div class="ratio ratio-16x9 mx-auto" style="max-width:800px;">
      <iframe src="<?= $mapsEmbed ?>" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-center">
  <p class="mb-0">© <?= date("Y") ?> <?= $namaSekolah ?>. All rights reserved.</p>
</footer>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
