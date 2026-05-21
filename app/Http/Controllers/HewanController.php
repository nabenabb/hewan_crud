<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{
    //
    public function index(){
        //menentukan judul halaman
        $title = 'Data Hewan';
        $hewan = Hewan::all();
        return view('hewan.index', compact('title', 'hewan'));

    }

    public function create(){
        //menentukan judul halaman
        $title = 'Tambah Data Hewan';
        return view('hewan.create', compact('title'));

    }

    public function store(Request $request){
        //melakukan validasi data yg dikirim oleh pengguna
        $request->validate([
            //wajib diisi, berupa string, maksimal 50 karakter\
            'hewan' => 'required|string|max:50',
            //boleh kosong, jika diisi harus berupa string
            'jenis_hewan' => 'nullable|string',
            //boleh kosong, jika diisi harus berupa angka dan dimulai dari 0
            'umur' => 'nullable|numeric|min:0',
            'keadaan' => 'nullable|string',
        ]);
        //menyimpan data karyawan ke dalam database
        Hewan::create($request->all());
        //redirect ke halaman index dengan pesan sukses
        return redirect()->route('hewan.index')->with('success', 'Data Hewan berhasil ditambahkan.');

    }

    public function edit(Hewan $hewan){

    }

    public function update(Request $request, Hewan $hewan){

    }

    public function destroy(Hewan $hewan){
        //menghapus data karyawan yang dipilih
        $hewan->delete();
        //redirect ke halaman index dengan pesan sukses
        return redirect()->route('hewan.index')->with('success','Data Hewan berhasil dihapus.');

    }


}
