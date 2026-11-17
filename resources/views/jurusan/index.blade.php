<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Jurusan</title>
</head>
<body>
    <h1>Daftar Jurusan</h1>

    <!-- Pesan Sukses jika data berhasil disimpan -->
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <!-- Tombol menuju halaman form tambah -->
    <a href="{{ route('jurusan.create') }}">Tambah Jurusan</a>
    <br><br>

    <table border="1" cellpadding="6">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Jurusan</th>
            <th>Dibuat</th>
            <th>Aksi</th>
        </tr>
        @forelse ($jurusans as $j)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->kode }}</td>
            <td>{{ $j->nama }}</td>
            <td>{{ $j->created_at->format('d-m-Y H:i') }}</td>
            <td>
                <!-- Tombol Detail yang benar menggunakan variabel $j dari perulangan -->
                <a href="{{ route('jurusan.show', $j->id) }}">Detail</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">Belum ada data.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>