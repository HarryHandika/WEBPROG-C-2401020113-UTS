<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <h2>Tambah Anggota</h2>
  <form action="/anggota/store" method="POST">
    @csrf
    <div class="mb-2"><input name="nama" class="form-control" placeholder="Nama Lengkap" required></div>
    <div class="mb-2"><input name="email" type="email" class="form-control" placeholder="Email" required></div>
    <div class="mb-2"><input name="password" type="text" class="form-control" placeholder="Password" required></div>
    <button class="btn btn-success">Simpan</button>
    <a href="/anggota" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>
