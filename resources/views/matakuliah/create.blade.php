<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Form Tambah Mata Kuliah</h1>

    {{-- Menampilkan Pesan Error Validasi --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div>
            <label>Kode Mata Kuliah:</label><br>
            <input type="text" name="kode_matakuliah" value="{{ old('kode_matakuliah') }}">
        </div>
        <br>
        <div>
            <label>Nama Mata Kuliah:</label><br>
            <input type="text" name="nama_matakuliah" value="{{ old('nama_matakuliah') }}">
        </div>
        <br>
        <div>
            <label>Jumlah SKS (1 - 6):</label><br>
            <input type="number" name="sks" value="{{ old('sks') }}" min="1" max="6">
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
</body>
</html>