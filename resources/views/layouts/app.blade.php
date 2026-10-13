<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
</head>
<body>
    <header>
        <h1>Aplikasi Data Mahasiswa</h1>

        <nav>
            <a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
            |
            <a href="{{ route('mahasiswa.profil') }}">Profil</a>
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Aplikasi Pembelajaran Laravel</p>
    </footer>
</body>
</html>
