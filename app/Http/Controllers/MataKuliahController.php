<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $allMk = MataKuliah::all();

        return view('list_mk', [
            'title' => 'Daftar Mata Kuliah',
            'mks' => $allMk,
            'mataKuliah' => $allMk,
        ]);
    }

    public function create()
    {
        return view('create_mk', [
            'title' => 'Tambah Mata Kuliah',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);

        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mk,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/mata-kuliah')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->to('/mata-kuliah')->with('success', 'Data berhasil dihapus!');
    }
}