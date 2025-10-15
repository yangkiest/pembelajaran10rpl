<?php
// ============================
// index.php - Website SMPN 1 CANDI (versi simple)
// ============================

$judulNavbar = 'SMPN 1 CANDI';
$nav = ['Beranda', 'Profil', 'VisiMisi', 'Ekstrakurikuler', 'Prestasi'];

// DATA PROFIL
$logo = 'img/logosmpn1candi.png';
$namaSekolah = 'SMP NEGERI 1 CANDI';
$kepalaSekolah = 'Drs. H. Imam Santoso, M.Pd.';
$alamat = 'Jl. Raya Candi No.45, Candi, Sidoarjo, Jawa Timur';
$akreditasi = 'A';
$status = 'Negeri';
$slogan = 'CERDAS, BERKARAKTER, BERPRESTASI';

// VISI MISI
$visi = 'Mewujudkan peserta didik yang unggul dalam prestasi, beriman, dan berakhlak mulia.';
$misi = [
  'Menanamkan nilai-nilai religius dan karakter pada seluruh warga sekolah.',
  'Meningkatkan kualitas pembelajaran berbasis teknologi dan inovasi.',
  'Mengembangkan potensi peserta didik melalui kegiatan ekstrakurikuler.',
  'Menciptakan lingkungan sekolah yang bersih, aman, dan ramah anak.'
];

// EKSTRAKURIKULER
$ekskul = [
  ['Pramuka', 'Melatih kemandirian dan jiwa kepemimpinan siswa.'],
  ['Paskibra', 'Membentuk kedisiplinan dan rasa cinta tanah air.'],
  ['PMR', 'Menumbuhkan kepedulian sosial dan kesehatan diri.'],
  ['Karya Ilmiah Remaja (KIR)', 'Meningkatkan kreativitas dan kemampuan penelitian.'],
  ['Basket', 'Mengembangkan kemampuan olahraga dan kerjasama tim.'],
];

// PRESTASI
$prestasiImg = 'img/prestasi1candi.jpg';
$prestasiList = [
  'Juara 1 Lomba Cerdas Cermat Tingkat Kabupaten (2024)',
  'Juara 2 Lomba Kebersihan Sekolah (2023)',
  'Juara 3 FLS2N Menyanyi Solo Putri (2023)',
  'Juara Harapan 1 Karya Ilmiah Remaja Tingkat Provinsi (2022)',
];
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($judulNavbar) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background-color: #f9fafb; }
    .navbar-brand { font-weight: 700; color: #0d6efd !important; }
    section { padding: 60px 0; }
    footer { background: #f8f9fa; padding: 20px 0; margin-top: 40px; color: #555; }
    .prestasi-list li::before { content: '🏅 '; }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">SMPN 1 CANDI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php foreach($nav as $n): ?>
          <li class="nav-item"><a class="nav-link" href="#<?= strtolower($n) ?>"><?= $n ?></a></li>
        <?php endforeach; ?>
      </ul>
      <form class="d-flex ms-3" role="search">
        <input class="form-control" type="search" placeholder="Cari..." aria-label="Search">
      </form>
    </div>
  </div>
</nav>

<!-- BERANDA -->
<section id="beranda" class="text-center">
  <div class="container">
    <img src="img/halamancandi.jpg" class="img-fluid rounded mb-4" alt="Tampak depan SMPN 1 CANDI">
    <h1 class="fw-bold">Selamat Datang di <?= htmlspecialchars($namaSekolah) ?></h1>
    <p class="text-muted"><?= htmlspecialchars($slogan) ?></p>
  </div>
</section>

<!-- PROFIL -->
<section id="profil">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center mb-3">
        <img src="<?= $logo ?>" class="img-fluid" alt="Logo <?= htmlspecialchars($namaSekolah) ?>" style="max-height:120px;">
      </div>
      <div class="col-md-8">
        <h2 class="fw-bold mb-3">Profil Sekolah</h2>
        <p><strong>Kepala Sekolah:</strong> <?= htmlspecialchars($kepalaSekolah) ?></p>
        <p><strong>Alamat:</strong> <?= htmlspecialchars($alamat) ?></p>
        <p><strong>Status:</strong> <?= htmlspecialchars($status) ?> | <strong>Akreditasi:</strong> <?= htmlspecialchars($akreditasi) ?></p>
        <p><strong>Slogan:</strong> "<?= htmlspecialchars($slogan) ?>"</p>
      </div>
    </div>
  </div>
</section>

<!-- VISI & MISI -->
<section id="visimisi" class="bg-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <h2 class="fw-bold text-primary mb-3">Visi</h2>
        <p><?= htmlspecialchars($visi) ?></p>
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold text-primary mb-3">Misi</h2>
        <ul>
          <?php foreach($misi as $m): ?>
            <li><?= htmlspecialchars($m) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- EKSTRAKURIKULER -->
<section id="ekstrakurikuler">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Ekstrakurikuler</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php foreach($ekskul as $e): ?>
        <div class="col">
          <div class="card shadow-sm border-0 p-3 h-100">
            <h5 class="fw-bold"><?= htmlspecialchars($e[0]) ?></h5>
            <p class="text-muted mb-0"><?= htmlspecialchars($e[1]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PRESTASI -->
<section id="prestasi" class="bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Prestasi Sekolah</h2>
    <div class="row align-items-center g-4">
      <div class="col-md-5 text-center">
        <img src="<?= $prestasiImg ?>" class="img-fluid rounded shadow-sm" alt="Prestasi <?= htmlspecialchars($namaSekolah) ?>">
      </div>
      <div class="col-md-7">
        <ul class="list-group list-group-flush prestasi-list">
          <?php foreach($prestasiList as $p): ?>
            <li class="list-group-item border-0"><?= htmlspecialchars($p) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<footer class="text-center">
  <p class="mb-0">&copy; <?= date('Y') ?> <?= htmlspecialchars($namaSekolah) ?>. Semua hak dilindungi.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
