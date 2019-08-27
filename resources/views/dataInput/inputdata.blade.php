@extends('templates.view_header_admin')
@section('content')
	<div class="container-fluid">
		<center>
			<h2>Tambah Data Kepengurusan</h2>
		</center>
		<form action="/aparatur/save" method="post" enctype="multipart/form-data">
		@csrf
		<table class="table table-light table-bordered">
			<tr>
				<th>Nama Lengkap</th>
				<td><input class="form-control" type="text" name="nama" require></td>
			</tr>

			<tr>
				<th>Jenis Kelamin</th>
				<td>
					<select class="custom-select form-control" name="jk" require>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</td>				
			</tr>

			<tr>
				<th>Tanggal lahir</th>
				<td>
					<input class="form-control" type="date" name="tgllahir" require>
				</td>
			</tr>

			<tr>
				<th>Pendidikan</th>
				<td>
					<select class="custom-select form-control" name="pendidikan" require>
						<option value="SD">SD</option>
						<option value="SLTP">SLTP/Sederajat</option>
						<option value="SLTA">SLTA/Sederajat</option>
						<option value="SD">SD/Sederajat</option>
						<option value="SLTP">SLTP/SMP/MTS/Sederajat</option>
						<option value="SLTA">SLTA/SMK/STM/Sederajat</option>
						<option value="D1">D1</option>
						<option value="D3">D3</option>
						<option value="D4">D4</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Jabatan</th>
				<td>
					<select class="custom-select form-control" name="jabatan" require>
					@foreach($jabatan as $jbt)
						<option value="{{$jbt->jabatan}}">{{$jbt->jabatan}}</option>
					@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<th>Jenis Jabatan</th>
				<td>
					<select class="custom-select form-control" name="jjb" require>
					@foreach($struktur_jabatan as $jjb)
						<option value="{{$jjb->jenis_jabatan}}">{{$jjb->jenis_jabatan}}</option>
					@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<th>Nomor SK</th>
				<td><input type="text" class="form-control" name="skangkat" require></td>
			</tr>

			<tr>
				<th>Massa Akhir Jabatan</th>
				<td><input type="date" class="form-control" name="ahirjabatan" require></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td>
					<textarea name="keterangan" class="form-control" require></textarea>
				</td>
			</tr>

			<tr>
				<th>Instansi Pemerintahan</th>
				<td>
					<select class="custom-select form-control" name="instansi" require>
						<option value="Desa">Desa</option>
						<option value="Kesehatan">Kesehatan</option>
						<option value="Polsek">Polsek</option>
						<option value="Koramil">Koramil</option>
						<option value="-">-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>NIP/NRP</th>
				<td>
					<input class="form-control" type="text" name="nip" require>
				</td>
			</tr>
			
			<tr>
				<th>NIK</th>
				<td>
					<input class="form-control" type="text" name="nik" require>
				</td>
			</tr>
			
			<tr>
				<th>Tempat Lahir</th>
				<td>
					<input class="form-control" type="text" name="tmplahir" require>
				</td>
			</tr>
			
			<tr>
				<th>Golongan Darah</th>
				<td>
					<select class="custom-select form-control" name="goldar" require>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="O">O</option>
						<option value="AB">AB</option>
						<option value="-">-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Agama</th>
				<td>
					<select class="custom-select form-control" name="agama" require>
						<option value="Islam">Islam</option>
						<option value="Nasrani">Nasrani</option>
						<option value="Buddha">Buddha</option>
						<option value="Hindu">Hindu</option>
						<option value="Khonghucu">Khonghucu</option>
						<option value="Lain-Lain">Lain-Lain</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Jenis Pekerjaan</th>
				<td>
					<select class="custom-select form-control" name="jp" require>
						<option value="Tidak/Belum Bekerja">Tidak/Belum Bekerja</option>
						<option value="PNS">PNS</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						<option value="Lain-Lain">Lain-Lain</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Status Kawin</th>
				<td>
					<select class="custom-select form-control" name="statkaw" require>
						<option value="Kawin">Kawin</option>
						<option value="Belum Kawin">Belum Kawin</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Penyandang Cacat</th>
				<td>
					<select class="custom-select form-control" name="cacat" require>
						<option value="Tunanetra">Tunanetra</option>
						<option value="Tunarungu">Tunarungu</option>
						<option value="Tunawicara">Tunawicara</option>
						<option value="Tunadaksa">Tunadaksa</option>
						<option value="Tunalaras">Tunalaras</option>
						<option value="Tunagrahita">Tunagrahita</option>
						<option value="Tunaganda">Tunaganda</option>
						<option value="-">-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Status Kepengurusan</th>
				<td>
					<select class="custom-select form-control" name="status" require>
						<option value="Aktif">Aktif</option>
						<option value="Non Aktif">Non Aktif</option>
					</select>
				</td>				
			</tr>

			<tr>
				<th>Alamat</th>
				<td>
					<textarea class="form-control" name="alamat" require></textarea>
				</td>
			</tr>

			<tr>
				<th>Status</th>
				<td>
					<select class="custom-select form-control" name="status" require>
						<option value="Aktif">Aktif</option>
						<option value="Non Aktif">Non Aktif</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Upload Foto</th>
				<td>
					<input type="file" name="foto" require>
					<h5>Note: max 2 MB, Jenis File : jpeg,png,jpg</h5>
				</td>
			</tr>
		</table>
		<input type="Submit" value="Simpan" class="btn btn-success">
		</form>
	</div>
@endsection