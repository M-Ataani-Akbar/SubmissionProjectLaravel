<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // Menampilkan daftar jurusan
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    // Menampilkan form tambah jurusan
    public function create()
    {
        return view('jurusan.create');
    }

    // Menyimpan data jurusan baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:20|unique:jurusans,kode',
            'nama' => 'required|string|max:100',
        ], [
            'kode.required' => 'Kode jurusan wajib diisi.',
            'kode.unique' => 'Kode jurusan sudah terdaftar.',
            'nama.required' => 'Nama jurusan wajib diisi.',
        ]);

        Jurusan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    // Menampilkan detail jurusan berdasarkan ID
    public function show(Jurusan $jurusan)
    {
        return view('jurusan.show', compact('jurusan'));
    }
}