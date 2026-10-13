@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                    <td>{{ $mhs['ipk'] }}</td>
                    <td>{{ $mhs['keterangan'] }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
