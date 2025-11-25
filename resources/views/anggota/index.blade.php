<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Manajemen Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <h2>Daftar Anggota</h2>
  <a href="/" class="btn btn-secondary me-2 mb-3">Kembali</a>
  <a href="/anggota/create" class="btn btn-primary mb-3">Tambah Anggota</a>
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  <table class="table table-bordered">
    <thead>
      <tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
    </thead>
    <tbody>
      @foreach($anggota as $a)
        <tr>
          <td>{{ $a['id'] }}</td>
          <td>{{ $a['nama'] }}</td>
          <td>{{ $a['email'] }}</td>
          <td>
            <a href="/anggota/edit/{{ $a['id'] }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/anggota/delete/{{ $a['id'] }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus anggota ini?')">Hapus</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
