<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5 bg-light">

<div class="container bg-white p-4 rounded shadow-sm">

    <h3 class="mb-3">Tambah Peminjaman</h3>
    <hr>

    <form action="/peminjaman/store" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Peminjam</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="/peminjaman" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

    </form>

</div>

</body>
</html>
