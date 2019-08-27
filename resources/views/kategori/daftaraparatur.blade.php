@extends('templates.view_header_admin')
@section('content')
<div class="col-md-0" style="margin-left: 10px; margin-right: 10px">
	<div class="card">
		<h2 class="text-center">DAFTAR APARATUR DESA CIMUJA</h2>
		<table class="table table-bordered">
			<tr class="text-center" style="background-color: skyblue">
                <th style="font-size: 9pt;"><p>No</p></th>
				<th style="font-size: 9pt;"><p>Nama</p></th>
                <th style="font-size: 9pt;"><p>NIP / NRP</p></th>
                <th style="font-size: 9pt;"><p>JK</p></th>
                <th style="font-size: 9pt;"><p>Tgl Lahir</p></th>
                <th style="font-size: 9pt;"><p>Pendidikan</p></th>
				<th style="font-size: 9pt;"><p>Jabatan</p></th>
                <th style="font-size: 9pt;"><p>SK Pengangkatan</p></th>
                <th style="font-size: 9pt;"><p>Akhir Jabatan</p></th>
				<th style="font-size: 9pt;"><p>Keterangan</p></th>
                <th style="font-size: 9pt;"><p>Status</p></th>
                <th style="font-size: 9pt;"><p>Info detail</p></th>
			</tr>
            <?php $i=0; ?>
            <?php foreach ($desa_cimuja as $key): ?>
            <tr>
                <td style="font-size: 9pt;">{{++$i}}</td style="font-size: 9pt;">
                <td style="font-size: 9pt;">{{$key->nama}}</td>
                <td style="font-size: 9pt;">{{$key->nip}}</td>
                <td style="font-size: 9pt;">{{$key->jns_kl}}</td>
                <td style="font-size: 9pt;">{{$key->tgl_lahir}}</td>
                <td style="font-size: 9pt;">{{$key->pddk_trkhr}}</td>
                <td style="font-size: 9pt;">{{$key->jbtn}}</td>
                <td style="font-size: 9pt;">{{$key->skangkat}}</td>
                <td style="font-size: 9pt;">{{$key->ahirjabatan}}</td>
                <td style="font-size: 9pt;">{{$key->keterangan}}</td>
                <td style="font-size: 9pt;">{{$key->status}}</td>
                <td style="font-size: 9pt;">
                    <a href="{{url('/profil/'.$key->nip)}}" class="btn btn-success">Lihat Profil</a>
                </td>
            </tr>
            <?php endforeach ?>
		</table>
        <div class="container">
            <button class="btn btn-danger">Cetak</button>
            <p class="text-right" style="margin-right: 50px;">Kepala Desa Cimuja</p>
        </div>
	</div>
</div>
@endsection