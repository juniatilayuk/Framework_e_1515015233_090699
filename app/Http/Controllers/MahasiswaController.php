<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;

class MahasiswaController extends Controller
{

   public function awal()
    {
        $semuaMahasiswa = Mahasiswa::all();
        return view('mahasiswa.awal',compact('semuaMahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function simpan(Request $input)
    {

    $mahasiswa = new mahasiswa;
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    $mahasiswa->pengguna_id = $input->pengguna_id;
    $informasi = $mahasiswa->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    
    }


    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function lihat($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

   public function update($id, Request $input)
    {
         $mahasiswa = mahasiswa::find($id);
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    $mahasiswa->pengguna_id = $input->pengguna_id;
    $informasi = $mahasiswa->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }

     public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if($mahasiswa->pengguna()->delete()){
            if($mahasiswa->delete()) $this->informasi = 'Berhasil hapus data';
            return redirect('mahasiswa')-> with(['informasi'=>$this->informasi]);
        }
    }
}