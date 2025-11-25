<!DOCTYPE html>
<html>
<head>
  <title>Tambah Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <h2>Tambah Buku</h2>
  <form action="/buku/store" method="POST">
    @csrf
    <div class="mb-2"><input name="judul" class="form-control" placeholder="Judul Buku" required></div>
    <div class="mb-2"><input name="penulis" class="form-control" placeholder="Penulis" required></div>
    <div class="mb-2"><input name="kategori" class="form-control" placeholder="Kategori" required></div>
    <div class="mb-2"><input name="stok" type="number" class="form-control" placeholder="Jumlah Stok" required></div>
    <button class="btn btn-success">Simpan</button>
    <a href="/buku" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>
