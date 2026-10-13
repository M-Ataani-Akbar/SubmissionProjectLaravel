<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Ataan';
        $nim = '242520075';
        $prodi = 'Teknologi';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    public function index()
    {
        $mahasiswa = [
            [
                'nim' => '242520075',
                'nama' => 'Ataan',
                'prodi' => 'Teknologi',
                'ipk' => 3.50,
                'keterangan' => 'Aktif'
            ],
            [
                'nim' => '242520076',
                'nama' => 'Budi',
                'prodi' => 'Informatika',
                'ipk' => 3.20,
                'keterangan' => 'Aktif'
            ],
            [
                'nim' => '242520077',
                'nama' => 'Siti',
                'prodi' => 'Sistem Informasi',
                'ipk' => 3.80,
                'keterangan' => 'Aktif'
            ],
            [
                'nim' => '242520078',
                'nama' => 'Andi',
                'prodi' => 'Teknologi',
                'ipk' => 1.80,
                'keterangan' => 'Perlu Pembinaan'
            ],
            [
                'nim' => '242520079',
                'nama' => 'Rina',
                'prodi' => 'Informatika',
                'ipk' => 2.90,
                'keterangan' => 'Aktif'
            ],
        ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function show($nim)
    {
        $mahasiswa = [
            '242520075' => [
                'nim' => '242520075',
                'nama' => 'Ataan',
                'prodi' => 'Teknologi',
                'ipk' => 3.50,
                'keterangan' => 'Aktif'
            ],
            '242520076' => [
                'nim' => '242520076',
                'nama' => 'Budi',
                'prodi' => 'Informatika',
                'ipk' => 3.20,
                'keterangan' => 'Aktif'
            ],
            '242520077' => [
                'nim' => '242520077',
                'nama' => 'Siti',
                'prodi' => 'Sistem Informasi',
                'ipk' => 3.80,
                'keterangan' => 'Aktif'
            ],
            '242520078' => [
                'nim' => '242520078',
                'nama' => 'Andi',
                'prodi' => 'Teknologi',
                'ipk' => 1.80,
                'keterangan' => 'Perlu Pembinaan'
            ],
            '242520079' => [
                'nim' => '242520079',
                'nama' => 'Rina',
                'prodi' => 'Informatika',
                'ipk' => 2.90,
                'keterangan' => 'Aktif'
            ],
        ];

        abort_unless(isset($mahasiswa[$nim]), 404);

        return view('mahasiswa.show', [
            'mhs' => $mahasiswa[$nim]
        ]);
    }
}