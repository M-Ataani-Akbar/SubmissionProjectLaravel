<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Form Tambah Jurusan</h1>

    {{-- Menampilkan pesan error validasi jika ada --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <div>
            <label>Kode Jurusan:</label><br>
            <input type="text" name="kode" value="{{ old('kode') }}">
        </div>
        <br>
        <div>
            <label>Nama Jurusan:</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>
    </form>
</body>
</html>