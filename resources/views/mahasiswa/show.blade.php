@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h2>Detail Mahasiswa</h2>

    <p><strong>NIM:</strong> {{ $mhs['nim'] }}</p>
    <p><strong>Nama:</strong> {{ $mhs['nama'] }}</p>
    <p><strong>Program Studi:</strong> {{ $mhs['prodi'] }}</p>
    <p><strong>IPK:</strong> {{ $mhs['ipk'] }}</p>
    <p><strong>Keterangan:</strong> {{ $mhs['keterangan'] }}</p>

  
   @if ($mhs['ipk'] < 2.0)
    <x-alert>
        Peringatan: IPK mahasiswa di bawah 2,0. Perlu pembinaan akademik.
    </x-alert>
@endif

    <a href="{{ route('mahasiswa.index') }}">Kembali ke Daftar Mahasiswa</a>
@endsection
