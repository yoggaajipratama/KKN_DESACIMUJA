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


    public function daftar($jenis_jabatan){
        $desa_cimuja = DB::table('desa_cimuja')->where('jns_jbt',$jenis_jabatan)->get();
        return view('kategori/daftaraparatur',['desa_cimuja'=>$desa_cimuja])->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // public function daftar(){
    //     $data = DB::table('desa_cimuja')->get();
    //     return view('kategori/daftaraparatur',['data'=>$data]);
    // }

    public function daftarlama(){
        return view('kategori/view_kategori');
    }

    public function tampil_jabatan(){
        $jenis_jabatan = DB::table('struktur_jabatan')->get();
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
            'status'=>'required',
            'alamat'=>'required',
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
        $data->alamat = $request->get('alamat');
        $data->status = $request->get('status');
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
        return redirect('/home');
    }

    public function editdata($id){
        $data = DesaCimuja::find($id);
        $datajbt = DB::table('jabatan')->orderBy('id')->get();
        $struktur_jabatan = DB::table('struktur_jabatan')->get();
        return view('dataInput/dataEdit', ['data'=>$data,'jabatan'=>$datajbt, 'struktur_jabatan'=>$struktur_jabatan]);
    }

    public function editProses(Request $request, $id){
        $this->validate($request,[
            'enama'=>'required',
            'ejk'=>'required',
            'etgllahir'=>'required',
            'ependidikan'=>'required',
            'ejabatan'=>'required',
            'ejjb'=>'required',
            'eskangkat'=>'required',
            'eahirjabatan'=>'required',
            'eketerangan'=>'required',
            'einstansi'=>'required',
            'enip'=>'required',
            'estatus'=>'required',
            'ealamat'=>"required",
        ]);
        $data = DesaCimuja::find($id);
        $data->nama = $request->get('enama');
        $data->nik = $request->get('enik');
        $data->tempat_lahir = $request->get('etmplahir');
        $data->jns_kl = $request->get('ejk');
        $data->tgl_lahir = $request->get('etgllahir');
        $data->gol_darah = $request->get('egoldar');
        $data->agama = $request->get('eagama');
        $data->pddk_trkhr = $request->get('ependidikan');
        $data->jbtn = $request->get('ejabatan');
        $data->jns_jbt = $request->get('ejjb');
        $data->jns_pkrj = $request->get('ejp');
        $data->cacat = $request->get('ecacat');
        $data->status_kwn = $request->get('estatkaw');
        $data->skangkat = $request->get('eskangkat');
        $data->ahirjabatan = $request->get('eahirjabatan');
        $data->keterangan = $request->get('eketerangan');
        $data->instansi = $request->get('einstansi');
        $data->nip = $request->get('enip');
        $data->alamat = $request->get('ealamat');
        $data->status = $request->get('estatus');
        $data->save();
        return redirect()->back();
    }
}
