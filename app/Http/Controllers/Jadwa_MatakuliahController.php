<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwa_matakuliah;
use App\dosen;
use App\matakuliah;

class JadwaMatakuliahController extends Controller
{
    protected informasi = 'Gagal Melakukan Aksi';
    public function awal(){
        $semuajadwalmatakuliah = jadwa_matakuliah::all();
        return view('jadwa_matakuliah.awal',compact(semuajadwalmatakuliah));
    }
public function tambah(){
    $mahasiswa = new mahasiswa;
    $ruangan = new ruangan;
    $semuajadwalmatakuliah = new dose_matakuliah;
    return view('jadwa_matakuliah.tambah',compact('mahasiswa','ruangan','dose_matakuliah'));
    }

public function simpan(Request $input){
    $jadwa_matakuliah = new jadwa_matakuliah($input->only('ruangan_id','dosen_matakuliah_id'))
    if($jadwa_matakuliah->)
    }
public function edit($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    return view('jadwa_matakuliah.edit')->with(array('jadwa_matakuliah'=>$jadwa_matakuliah));
    }
public function lihat($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    return view('jadwa_matakuliah.lihat')->with(array('jadwa_matakuliah'=>$jadwa_matakuliah));
}
public function update($id, Request $input){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    $jadwa_matakuliah->mahasiswa_id = $input->mahasiswa_id;
    $jadwa_matakuliah->ruangan_id = $input->ruangan_id;
    $jadwa_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
    $informasi = $jadwa_matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('jadwa_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    $informasi = $jadwa_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('jadwa_matakuliah')->with(['informasi'=>$informasi]);
}
}
