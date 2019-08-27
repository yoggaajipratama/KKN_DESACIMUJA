@extends('data_print.templates.view_header')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="{{asset('/css/paper.css')}}">
	@section('title','PERANGKAT DESA CIMUJA')	
</head>
</body>
	<div class="book">
		<div class="page" id="page">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<img src="{{asset('images/Sumedang.png')}}" style="width: 210px;height: 150px">
				</div>
				<div class="row align-items-center justify-content-center">
					<h4 style="text-decoration: underline;">
						<strong>BIODATA PERANGKAT DESA CIMUJA</strong>
					</h4>
				</div>
				<div class="row align-items-center justify-content-center">
					<?php foreach ($profil as $key): ?>
					<h6>
						<strong>{{$key->nip}}</strong>
					</h6>
					<?php endforeach ?>
				</div>
			</div>
			<div class="container">
				<h6><strong>DATA PERSONAL</strong></h6>
				<table style="margin-left: 30px">
				<?php foreach ($profil as $key): ?>
					<tr>
						<th>1.&ensp;Nama Lengkap</th>
						<td>:&ensp;</td>
						<td>{{$key->nama}}</td>
					</tr>
					<tr>
						<th>2.&ensp;Tempat Lahir</th>
						<td>:&ensp;</td>
						<td>{{$key->tempat_lahir}}</td>
					</tr>
					<tr>
						<th>3.&ensp;Tanggal Lahir</th>
						<td>:&ensp;</td>
						<td>{{$key->tgl_lahir}}</td>
					</tr>
					<tr>
						<th>4.&ensp;Jenis Kelamin</th>
						<td>:&ensp;</td>
						<td>{{$key->jns_kl}}</td>
					</tr>
					<tr>
						<th>5.&ensp;Golongan Darah</th>
						<td>:&ensp;</td>
						<td>{{$key->gol_darah}}</td>
					</tr>
					<tr>
						<th>6.&ensp;Agama</th>
						<td>:&ensp;</td>
						<td>{{$key->agama}}</td>
					</tr>
					<tr>
						<th>7.&ensp;Pendidikan Terakhir</th>
						<td>:&ensp;</td>
						<td>{{$key->pddk_trkhr}}</td>
					</tr>
					<tr>
						<th>8.&ensp;Jenis Pekerjaan</th>
						<td>:&ensp;</td>
						<td>{{$key->jns_pkrj}}</td>
					</tr>
					<tr>
						<th>9.&ensp;Penyandang Cacat</th>
						<td>:&ensp;</td>
						<td>{{$key->cacat}}</td>
					</tr>
					<tr>
						<th>10.&ensp;Status Perkawinan</th>
						<td>:&ensp;</td>
						<td>{{$key->status_kwn}}</td>
					</tr>
					<tr>
						<th>11.&ensp;Hubungan Keluarga</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>12.&ensp;NIK Ibu</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>13.&ensp;Nama Lengkap Ibu</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>14.&ensp;NIK Ayah</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>15.&ensp;Nama Lengkap Ayah</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>16.&ensp;Alamat Sebelumnya</th>
						<td>:&ensp;</td>
						<td>-</td>
					</tr>
					<tr>
						<th>17.&ensp;Alamat Sekarang</th>
						<td>:&ensp;</td>
						<td>{{$key->alamat}}</td>
					</tr>
				<?php endforeach ?>
				</table>
			</div>
			<div class="container">
				<h6><strong>DATA KEPEMILIKAN DOKUMEN</strong></h6>
				<table style="margin-left: 30px">
					<tr>
						<th>Nomor Kartu Keluarga</th>
					</tr>
					<tr>
						<th>Nomor Passport</th>
					</tr>
					<tr>
						<th>Tanggal Berakhir Passport</th>
					</tr>
					<tr>
						<th>No Akta Kelahiran</th>
					</tr>
					<tr>
						<th>No Akta Kawin/Buku Nikah</th>
					</tr>
					<tr>
						<th>Tanggal Perkawinan</th>
					</tr>
					<tr>
						<th>No Akta Cerai/Surat Cerai</th>
					</tr>
					<tr>
						<th>Tanggal Perceraian</th>
					</tr>
				</table>
			</div>
			<div style="margin-top: 50px;margin-left: 50%;">
				<table>
					<tr>
						<th style="padding: 40px">Pemohon</th>
						<th style="padding: 40px">Kepala Desa Cimuja</th>
					</tr>
					<tr>
						<td style="padding: 40px">
							<div class="row align-items-center justify-content-center">
								<?php foreach ($profil as $key): ?>
									<h6><strong>{{$key->nama}}</strong></h6>
								<?php endforeach ?>
							</div>
						</td>
						<td style="padding: 40px">
							<div class="row align-items-center justify-content-center">
								<h6><strong>EUIS</strong></h6>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>	
	</div>
</body>
</html>
@stop