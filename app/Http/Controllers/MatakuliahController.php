<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan seluruh data mata kuliah dalam bentuk tabel
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan data baru dengan validasi sesuai ketentuan
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks' => 'required|integer|between:1,6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique' => 'Kode mata kuliah sudah terdaftar.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'sks.required' => 'Jumlah SKS wajib diisi.',
            'sks.between' => 'Jumlah SKS harus di antara 1 sampai 6.',
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    // Menampilkan detail satu mata kuliah berdasarkan ID
    public function show(Matakuliah $matakuliah)
    {
        return view('matakuliah.show', compact('matakuliah'));
    }
}