<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <h2>Edit Anggota</h2>
  <form action="/anggota/update/{{ $data['id'] }}" method="POST">
    @csrf
    <div class="mb-2">
      <input name="nama" class="form-control" value="{{ $data['nama'] }}" required>
    </div>
    <div class="mb-2">
      <input name="email" type="email" class="form-control" value="{{ $data['email'] }}" required>
    </div>
    <div class="mb-2">
      <input name="password" type="text" class="form-control" value="{{ $data['password'] }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="/anggota" class="btn btn-secondary">Kembali</a>
  </form>
</body>
</html>
