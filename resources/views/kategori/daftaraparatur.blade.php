@extends('templates.view_header_admin')
@section('content')
<div class="col-md-12">
	<div class="card">
		<h2 class="text-center">DAFTAR APARATUR DESA CIMUJA</h2>
		<table class="table table-bordered">
			<tr style="background: skyblue;">
                <th style="font-size: 9pt;">No</th>
				<th style="font-size: 9pt;">Nama</th>
                <th style="font-size: 9pt;">NIP / NRP</th>
                <th style="font-size: 9pt;">Jenis Kelamin</th>
                <th style="font-size: 9pt;">Tanggal Lahir</th>
                <th style="font-size: 9pt;">Pendidikan</th>
				<th style="font-size: 9pt;">Jabatan</th>
                <th style="font-size: 9pt;">SK Pengangkatan</th>
                <th style="font-size: 9pt;">Tahun Masa Akhir Jabatan</th>
				<th style="font-size: 9pt;">Keterangan</th>
                <th style="font-size: 9pt;">Status</th>
			</tr>
            <tr>
                <?php foreach ($desa_cimuja as $key): ?>
                <td style="font-size: 9pt;">{{$key->id}}</td style="font-size: 9pt;">
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
                <?php endforeach ?>
            </tr>
		</table>
        <div class="container">
            <p class="text-right" style="margin-right: 50px;">Kepala Desa Cimuja</p>
        </div>
	</div>
</div>
@endsection