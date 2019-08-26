@extends('templates.view_header_admin')
@section('content')
<div class="col-md-12">
	<div class="card">
		<h2 class="text-center">DAFTAR APARATUR DESA CIMUJA</h2>
		<table class="table table-bordered">
			<tr style="background: skyblue;">
                <th>No</th>
				<th>Nama</th>
                <th>NIP / NRP</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan</th>
				<th>Jabatan</th>
                <th>SK Pengangkatan</th>
                <th>SK Masa Akhir Jabatan</th>
				<th>Keterangan</th>
                <th>Ubah Status</th>
			</tr>
            @foreach($data as $d)
            <tr>    
                <td>{{$d->id}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->nip}}</td>
                <td>{{$d->jns_kl}}</td>
                <td>{{$d->tgl_lahir}}</td>
                <td>{{$d->pddk_trkhr}}</td>
                <td>{{$d->jbtn}}</td>
                <td>{{$d->skangkat}}</td>
                <td>{{$d->ahirjabatan}}</td>
                <td>{{$d->keterangan}}</td>
                <td></td>
            </tr>
            @endforeach
		</table>
        <div class="container">
            <p class="text-right" style="margin-right: 50px;">Kepala Desa Cimuja</p>
        </div>
	</div>
</div>
@endsection