<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5 bg-light">

<div class="container bg-white p-4 rounded shadow-sm">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Manajemen Peminjaman</h3>
        <div>
            <a href="/" class="btn btn-secondary me-2">Kembali</a>
            <a href="/peminjaman/tambah" class="btn btn-primary">+ Tambah Peminjaman</a>
        </div>
    </div>

    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($peminjaman as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['judul_buku'] }}</td>
                        <td>{{ $item['tanggal_pinjam'] }}</td>
                        <td>{{ $item['tanggal_kembali'] }}</td>
                        <td>
                            @if($item['status'] == 'Dipinjam')
                                <span class="badge bg-warning text-dark">Dipinjam</span>
                            @else
                                <span class="badge bg-success">Dikembalikan</span>
                            @endif
                        </td>
                        <td>
                            @if($item['status'] == 'Dipinjam')
                                <a href="/peminjaman/kembalikan/{{ $item['id'] }}" class="btn btn-sm btn-success">Kembalikan</a>
                            @endif
                            <a href="/peminjaman/hapus/{{ $item['id'] }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data peminjaman</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
