<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Aparatur;
use App\Jabatan;
use App\DesaCimuja;

class AparaturController extends Controller
{
    public function index(){
        $datajbt = DB::table('jabatan')->orderBy('id')->get();
        $struktur_jabatan = DB::table('struktur_jabatan')->get();
    	return view('/dataInput/inputdata',['jabatan'=>$datajbt, 'struktur_jabatan'=>$struktur_jabatan]);
    }

    public function daftar(){
        $data = DB::table('desa_cimuja')->get();
        return view('kategori/daftaraparatur',['data'=>$data]);
    }

    public function daftarlama(){

        return view('kategori/view_kategori');
    }

    public function tampil_jabatan(){
        $jenis_jabatan = DB::table('jabatan')->get();
        return view('dataInput/inputJabatan',['jenis_jabatan' => $jenis_jabatan]);
    }

    public function jabatan(Request $request){
        $this->validate($request,[
            'jabatan'=>'required'
        ]);
        $datajbtnew = new Jabatan;
        $datajbtnew->jabatan = $request->get('jabatan');
        $datajbtnew->save();
        return redirect('tambahjabatan');
    }
    
    public function inputdata(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'jk'=>'required',
            'tgllahir'=>'required',
            'pendidikan'=>'required',
            'jabatan'=>'required',
            'jjb'=>'required',
            'skangkat'=>'required',
            'ahirjabatan'=>'required',
            'keterangan'=>'required',
            'instansi'=>'required',
            'nip'=>'required',
            'foto'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data = new DesaCimuja;
        $data->nama = $request->get('nama');
        $data->nik = $request->get('nik');
        $data->tempat_lahir = $request->get('tmplahir');
        $data->jns_kl = $request->get('jk');
        $data->tgl_lahir = $request->get('tgllahir');
        $data->gol_darah = $request->get('goldar');
        $data->agama = $request->get('agama');
        $data->pddk_trkhr = $request->get('pendidikan');
        $data->jbtn = $request->get('jabatan');
        $data->jns_jbt = $request->get('jjb');
        $data->jns_pkrj = $request->get('jp');
        $data->cacat = $request->get('cacat');
        $data->status_kwn = $request->get('statkaw');
        $data->skangkat = $request->get('skangkat');
        $data->ahirjabatan = $request->get('ahirjabatan');
        $data->keterangan = $request->get('keterangan');
        $data->instansi = $request->get('instansi');
        $data->nip = $request->get('nip');
        // $data->foto = $request->get('foto');
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('foto');
        $nip = $request->get('nik');
        $nama_file = $nip."_".$file->getClientOriginalName();
        $data->foto = $nama_file;
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_gambar';
		$file->move($tujuan_upload,$nama_file);
        $data->save();
        return redirect('daftaraparatur');
    }
}
