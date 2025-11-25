<!DOCTYPE html>
<html>
<head>
  <title>Daftar Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <h2>Daftar Buku</h2>
  <a href="/" class="btn btn-secondary me-2 mb-3">Kembali</a>
  <a href="/buku/create" class="btn btn-primary mb-3">Tambah Buku</a>
  <table class="table table-bordered">
    <thead>
      <tr><th>ID</th><th>Judul</th><th>Penulis</th><th>Kategori</th><th>Stok</th><th>Aksi</th></tr>
    </thead>
    <tbody>
      @if(is_array($buku) && count($buku) > 0)
        @foreach($buku as $b)
          <tr>
            <td>{{ $b['id'] }}</td>
            <td>{{ $b['judul'] }}</td>
            <td>{{ $b['penulis'] }}</td>
            <td>{{ $b['kategori'] }}</td>
            <td>{{ $b['stok'] }}</td>
            <td><a href="/buku/delete/{{ $b['id'] }}" class="btn btn-danger btn-sm">Hapus</a></td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="6" class="text-center">Tidak ada buku tersedia.</td>
        </tr>
      @endif
    </tbody>
  </table>
</body>
</html>
