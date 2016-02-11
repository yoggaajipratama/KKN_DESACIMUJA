<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Aparatur;
class AparaturController extends Controller
{
    public function index(){
    	return view('/dataInput/inputdata');
    }

    public function daftar(){
        return view('kategori/daftaraparatur');
    }

    public function daftarlama(){
        return view('kategori/view_kategori');
    }

    public function tampil_jabatan(){
        $jenis_jabatan = DB::table('struktur_jabatan')->get();
        return view('dataInput/inputJabatan',['jenis_jabatan' => $jenis_jabatan]);
    }

    public function jabatan(){
        return redirect('home');
    }
    
    public function inputdata(Request $request){
        $data = new Aparatur;
        $data->nama = $request->get('nama');
        $data->jk = $request->get('jk');
        $data->tgllahir = $request->get('tgllahir');
        $data->pendidikan = $request->get('pendidikan');
        $data->jabatan = $request->get('jabatan');
        $data->skangkat = $request->get('skangkat');
        $data->skahir = $request->get('ahirjabatan');
        $data->keterangan = $request->get('keterangan');
        $data->instansi = $request->get('instansi');
        $data->nip = $request->get('nip');
        $data->foto = $request->get('foto');
        $data->save();
        return redirect('daftaraparatur');
    }
}
