<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\matakuliah;
use Input;
use Redirect;
use Informasi;

class matakuliahcontroller extends Controller
{
    public function awal(){
        return view('matakuliah.awal',['data'=>matakuliah::all()]);
    }

    public function tambah(){
        return view('matakuliah.tambah');
    }

    public function simpan(Request $input){
        $matakuliah = new matakuliah;
        $matakuliah->id        = $input->id;
        $matakuliah->title     = $input->title;
        $matakuliah->keterangan= $input->keterangan;
        $informasi = $matakuliah->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $matakuliah=matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));

    }

    public function lihat($id){
        $matakuliah=matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }

    public function update($id, Request $input){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->title      = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil Update data ' : 'Gagal Update data';
       return redirect('matakuliah')->with(['informasi'=>$informasi]);

    }
    public function hapus($id){
        $matakuliah = matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }

    }