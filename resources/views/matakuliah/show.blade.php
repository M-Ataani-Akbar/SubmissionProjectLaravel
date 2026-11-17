<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>
    
    <p><strong>Kode Mata Kuliah:</strong> {{ $matakuliah->kode_matakuliah }}</p>
    <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_matakuliah }}</p>
    <p><strong>Jumlah SKS:</strong> {{ $matakuliah->sks }}</p>
    <p><strong>Tanggal Dibuat (created_at):</strong> {{ $matakuliah->created_at?->format('d-m-Y H:i:s') ?? '-' }}</p>
    <p><strong>Tanggal Diperbarui (updated_at):</strong> {{ $matakuliah->updated_at?->format('d-m-Y H:i:s') ?? '-' }}</p>
    
    <br>
    <a href="{{ route('matakuliah.index') }}">Kembali ke Daftar Mata Kuliah</a>
</body>
</html>
```[cite: 1]