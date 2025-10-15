<?php
// ============================
// Data sekolah (sumber: situs resmi SMPN 23 Depok)
// ============================

// Navigasi & Judul
$nav = ['Home', 'Profil', 'Kegiatan', 'Prestasi', 'Jadwal'];
$judulNavbar = "SMPN 23 DEPOK";

// ====== VISI & MISI ======
$judulAccordion1 = "VISI";
$isiAccordion1 = "<p>Terwujudnya peserta didik yang unggul, berkarakter, kreatif, inovatif serta berwawasan lingkungan.</p>";

$judulAccordion2 = "MISI";
$isiAccordion2 = "
<ul>
  <li>Menegakkan peraturan sekolah kepada seluruh warga sekolah.</li>
  <li>Meningkatkan prestasi akademik dan non-akademik.</li>
  <li>Meningkatkan kualitas SDM pendidik dan tenaga kependidikan.</li>
  <li>Membangun dan mengembangkan sarana & prasarana serta sumber belajar.</li>
  <li>Menciptakan suasana sekolah religius, santun, dan kekeluargaan.</li>
  <li>Membangun karakter akhlak mulia dan kerjasama dengan lingkungan.</li>
</ul>
";

// ====== PROFIL SEKOLAH ======
$logo = "img/logosmpn23png.jpg";
$prestasiImg = "img/prestasi23.jpg";
$namaSekolah = "SMP NEGERI 23 DEPOK";
$kepalaSekolah = "Sukmawaty Zulkifli, S.Pd., M.Pd.";
$wakil = "(tidak tercantum di web)";
$alamat = "Jl. Jambore Gg. Masjid No.29, Harjamukti, Cimanggis, Kota Depok, Jawa Barat";
$akreditasi = "B";
$status = "Negeri";
$kodepos = "16454";
$skPendirian = "SK No. 903/245/Kpts/Disdik/Huk/2 (26 Nov 2014)";
$slogan = "BERSINAR";

// ====== PRESTASI ======
$prestasiList = [
  "Juara 4 FLS2N Mencipta Lagu - Tingkat Kota (2016)",
  "Juara 2 Pasanggiri Kawih Sunda Putra - Tingkat Kota (2017)",
  "Juara 1 Paskibraka Regional Bekasi (2018)",
  "Juara 2 Taekwondo Kapolri Cup 2 - Nasional (2019)",
  "Borong medali Sprint Swimming Challenge Student Open (2025)"
];

// ====== JADWAL ======
$judulJadwal = "Jadwal PBM (Contoh)";
$jam = [
  "07:00 - 07:50",
  "07:50 - 08:30",
  "08:30 - 09:10",
  "09:10 - 09:30",
  "09:30 - 09:50 (Istirahat)",
  "09:50 - 10:20",
  "10:20 - 11:00",
  "11:00 - 11:40",
  "11:40 - 12:40 (Istirahat/Sholat)",
  "12:40 - 13:20",
  "13:20 - 14:00"
];
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($judulNavbar) ?></title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    .brand {
      letter-spacing: .6px;
    }
    .hero-carousel {
      max-width: 900px;
      margin: 2.5rem auto;
    }
    .card-school {
      background: linear-gradient(180deg, #e6fff0, #dff7e6);
      border-radius: 12px;
    }
    .slogan {
      font-weight: 700;
      color: #0d6efd;
    }
    footer {
      background: #f8f9fa;
      padding: 20px 0;
      margin-top: 40px;
    }
    @media (max-width:600px) {
      .hero-carousel { width:95%; }
    }

    /* ==== Carousel ==== */
    .carousel-item img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      border-radius: 0.5rem;
    }
    @media (max-width:768px) {
      .carousel-item img {
        height: 300px;
      }
    }

    /* ==== Card Kegiatan ==== */
    #kegiatan .card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    #kegiatan .card-img-top {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }
    #kegiatan .card-body {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    #kegiatan .card-title {
      min-height: 3.5rem;
    }
    #kegiatan .card-text {
      font-size: 0.9rem;
      color: #555;
    }
    #kegiatan .card:hover {
      transform: translateY(-4px);
      transition: 0.25s;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

<!-- ========== NAVBAR ========== -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand brand fw-bold text-primary" href="#"><?= htmlspecialchars($judulNavbar) ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <div class="navbar-nav ms-auto">
        <?php foreach($nav as $n): ?>
          <a class="nav-link" href="#<?= strtolower($n) ?>"><?= $n ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</nav>

<!-- ========== CAROUSEL HERO ========== -->
<div id="carouselSekolah" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/PAGERSMPN23.png" alt="Tampak Depan Sekolah">
    </div>
    <div class="carousel-item">
      <img src="img/SMPN23DEPOK.jpg" alt="Sekolah Depok">
    </div>
    <div class="carousel-item">
      <img src="img/pembeljrn23.jpg" alt="Pembelajaran di Kelas">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSekolah" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselSekolah" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- ========== KONTEN UTAMA ========== -->
<div class="container my-5">

  <!-- VISI & MISI + PROFIL -->
  <div class="row g-4">
    <div class="col-md-6">
      <div class="accordion shadow-sm" id="accMain">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#visiCollapse">
              <?= $judulAccordion1 ?>
            </button>
          </h2>
          <div id="visiCollapse" class="accordion-collapse collapse show">
            <div class="accordion-body"><?= $isiAccordion1 ?></div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misiCollapse">
              <?= $judulAccordion2 ?>
            </button>
          </h2>
          <div id="misiCollapse" class="accordion-collapse collapse">
            <div class="accordion-body"><?= $isiAccordion2 ?></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-school p-3 shadow-sm text-center">
        <div class="d-flex justify-content-center">
          <img src="<?= $logo ?>" alt="Logo Sekolah" style="max-height:80px;">
        </div>
        <h4 class="mt-3 fw-bold"><?= $namaSekolah ?></h4>
        <p class="mb-0">Kepala Sekolah: <strong><?= $kepalaSekolah ?></strong></p>
        <p class="mb-0">Wakil Kepala Sekolah: <strong><?= $wakil ?></strong></p>
        <p class="mb-0">Alamat: <?= $alamat ?></p>
        <p class="mb-0">Akreditasi: <?= $akreditasi ?> | Status: <?= $status ?></p>
        <p class="mb-1 slogan"><?= $slogan ?></p>
      </div>
    </div>
  </div>

  <!-- PROFIL DETAIL -->
  <section id="profil" class="mt-5">
    <h3 class="fw-bold">Profil Sekolah</h3>
    <table class="table table-striped mt-3">
      <tbody>
        <tr><th width="30%">Nama Sekolah</th><td><?= $namaSekolah ?></td></tr>
        <tr><th>Alamat</th><td><?= $alamat ?></td></tr>
        <tr><th>Kepala Sekolah</th><td><?= $kepalaSekolah ?></td></tr>
        <tr><th>Wakil</th><td><?= $wakil ?></td></tr>
        <tr><th>Akreditasi</th><td><?= $akreditasi ?></td></tr>
        <tr><th>SK Pendirian</th><td><?= $skPendirian ?></td></tr>
      </tbody>
    </table>
  </section>

  <!-- KEGIATAN -->
  <section id="kegiatan" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Kegiatan Sekolah</h2>
      <div class="row g-4">
        <?php
        $kegiatan = [
          ["Edukasi Gizi Seimbang: Cegah Anemia, Wujudkan Generasi Sehat dan Cerdas", "img/giziseimbang.png", "Oleh: Wida Ayu Firdayani, S.Pd — kegiatan edukatif bersama PGN dan Puskesmas Harjamukti."],
          ["Peringatan Maulid Nabi: Inspirasi Akhlak Mulia", "img/maulidan.png", "Kegiatan memperingati Maulid Nabi Muhammad SAW dengan tema meneladani akhlak Rasulullah."],
          ["Workshop Sekolah Aman Bicara", "img/amanbicara.jpeg", "Kolaborasi dengan Komunitas Pemimpin ID Depok untuk pencegahan kekerasan seksual di sekolah."],
          ["Kegiatan Jumat Litnum", "img/litnum.png", "Program pembiasaan rutin setiap Jumat untuk meningkatkan literasi dan numerasi siswa."],
          ["Panen Karya Projek P5", "img/sinergi.png", "Ajang pameran hasil karya siswa sesuai tema Projek Penguatan Profil Pelajar Pancasila."]
        ];
        foreach($kegiatan as $k): ?>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="<?= $k[1] ?>" class="card-img-top" alt="<?= $k[0] ?>">
              <div class="card-body">
                <h5 class="card-title fw-bold"><?= $k[0] ?></h5>
                <p class="card-text"><?= $k[2] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRESTASI -->
  <section id="prestasi" class="mt-5">
    <h3 class="fw-bold">Prestasi</h3>
    <div class="row">
      <div class="col-md-5">
        <img src="<?= $prestasiImg ?>" class="img-fluid rounded shadow-sm" alt="Prestasi SMPN 23 Depok">
      </div>
      <div class="col-md-7">
        <ul class="list-group list-group-flush">
          <?php foreach($prestasiList as $p): ?>
            <li class="list-group-item"><?= $p ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- JADWAL -->
  <section id="jadwal" class="mt-5">
    <h3 class="fw-bold"><?= $judulJadwal ?></h3>
    <div class="table-responsive mt-3">
      <table class="table table-bordered text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>Hari / Jam</th>
            <?php foreach($jam as $j): ?>
              <th style="min-width:90px;"><?= $j ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php
          $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
          foreach($hari as $h): ?>
            <tr>
              <td><strong><?= $h ?></strong></td>
              <?php for($i = 0; $i < count($jam); $i++): ?>
                <td><?= ($i == 4) ? 'Istirahat' : 'PBM' ?></td>
              <?php endfor; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
</div>

<!-- FOOTER -->
<footer>
  <div class="container text-center">
    <p class="mb-1"><strong><?= $namaSekolah ?></strong> — <?= $alamat ?> | Akreditasi: <?= $akreditasi ?></p>
    <small>Data berdasarkan situs resmi SMPN 23 Depok (ringkasan).</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
