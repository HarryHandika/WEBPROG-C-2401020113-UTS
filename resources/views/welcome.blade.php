<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #a3cef1, #eaf4fc);
      min-height: 100vh;
      font-family: "Poppins", sans-serif;
    }
    .hero {
      text-align: center;
      padding: 120px 20px;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      color: #1e3a8a;
    }
    .hero p {
      font-size: 1.2rem;
      color: #334155;
      margin-top: 10px;
    }
    .btn-custom {
      background-color: #2563eb;
      color: white;
      border-radius: 30px;
      padding: 10px 25px;
      transition: all 0.1s ease;
    }
    .btn-custom:hover {
      background-color: #1e40af;
    }
    .card-hover:hover {
      transform: scale(1);
      transition: 0.1s;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    }
    footer {
      text-align: center;
      padding: 20px;
      color: #475569;
      background-color: #e2e8f0;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="/">Perpustakaan Ngawi</a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="/buku" class="nav-link">Manajemen Buku</a></li>
          <li class="nav-item"><a href="/anggota" class="nav-link">Manajemen Anggota</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Peminjaman</a></li>
          <li class="nav-item"><a href="/" class="nav-link">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <h1>Selamat Datang di Manajemen Perpustakaan</h1>
    <p>Kelola perpustakaan sekarang jauh lebih gampang.</p>
    <a href="/buku" class="btn btn-custom mt-4">Skuy Kelola</a>
  </section>

  <section class="container py-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-3 card-hover">
          <div class="card-body text-center">
            <h4 class="card-title text-primary">Manajemen Buku</h4>
            <p class="card-text text-secondary">Tambah, ubah, hapus, dan lihat daftar buku yang tersedia.</p>
            <a href="/buku" class="btn btn-outline-primary btn-sm">Lihat Buku</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-3 card-hover">
          <div class="card-body text-center">
            <h4 class="card-title text-success">Manajemen Anggota</h4>
            <p class="card-text text-secondary">Atur data anggota perpustakaan beserta riwayat peminjamannya.</p>
            <a href="/anggota" class="btn btn-outline-success btn-sm">Lihat Anggota</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-3 card-hover">
          <div class="card-body text-center">
            <h4 class="card-title text-danger">Peminjaman</h4>
            <p class="card-text text-secondary">Kelola peminjaman dan pengembalian buku secara efisien.</p>
            <a href="/peminjaman" class="btn btn-outline-danger btn-sm">Lihat Peminjaman</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>© Manajemen Perpustakaan | Hery</p>
  </footer>
</body>
</html>
