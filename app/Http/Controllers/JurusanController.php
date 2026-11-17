<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // Menampilkan semua data jurusan
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('jurusan.create');
    }
    public function show(Jurusan $jurusan)
    {
    return view('jurusan.show', compact('jurusan'));
    }
    // Menyimpan data baru ke database
    public function store(Request $request)
{
    $request->validate([
        'kode' => 'required|string|max:20|unique:jurusans,kode',
        'nama' => 'required|string|max:100',
    ]);

    Jurusan::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
    ]);

    return redirect()->route('jurusan.index')
        ->with('success', 'Data jurusan berhasil ditambahkan.');
}
}