@extends('templates.view_header_admin')
@section('content')
	<div class="container">
		<div class="text-center">
			<h1>Tambah Data Aparatur</h1>
		</div>
		<br>
		<form class="was-validate" action="{{route('inputAparatur')}}" enctype="multipart/form-data" method="POST">		
			@csrf
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nama">Nama</label>
				<div class="col-sm-6">		
					<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="jk">Jenis Kelamin</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="jk" id="jk" required>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="tgllahir">Tanggal Lahir</label>
				<div class="col-sm-6">
					<input class="form-control" type="date" name="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required>	
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="pendidikan">Pendidikan</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="pendidikan" id="pendidikan" required>
						<option value="SD">SD</option>
						<option value="SMP">SLTP</option>
						<option value="SMA">SLTA</option>
						<option value="D1">D1</option>
						<option value="D3">D3</option>
						<option value="D4">D4</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</div>	
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="jabatan" id="jabatan" required>
						@foreach ( $jabatan as $jbt)
							<option value="{{ $jbt->jabatan }}">{{ $jbt->jabatan }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="skangkat">No SK Pengangkatan</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="skangkat" id="skangkat" placeholder="No SK Pengangkatan" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="ahirjabatan">Masa Berakhir Jabatan</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="ahirjabatan" id="ahirjabatan" placeholder="Masa Berakhir Jabatan" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="4" required placeholder="Keterangan"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="instansi">Instansi Pemerintahan</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="instansi" id="instansi" required>
						<option value="kesehatan">Kesehatan</option>
						<option value="koramil">Koramil</option>
						<option value="polsek">Polsek</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nip">NIP / NRP</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="nip" id="nip" placeholder="NIP / NRP" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nik">NIK</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="nik" id="nik" placeholder="NIK" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="tmplahir">Tempat Lahir</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="tmplahir" id="tmplahir" placeholder="Tempat Lahir" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="goldar">Golongan Darah</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="goldar" id="goldar" required>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="O">O</option>
						<option value="AB">AB</option>
						<option value="-">-</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="agama">Agama</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="agama" id="agama" required>
						<option value="Islam">Islam</option>
						<option value="Nasrani">Nasrani</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="jp">Jenis Pekerjaan</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="jp" id="jp" required>
						<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
						<option value="PNS">PNS</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
						<option value="Lain-Lain">Lain-Lain</option>
					</select>
				</div>
			</div>
			<!-- checkbox: penyandang cacat -->
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="statkaw">Status Kawin</label>
				<div class="col-sm-6">
					<select class="custom-select form-control" name="statkaw" id="statkaw" required>
						<option value="Kawin">Kawin</option>
						<option value="Belum Kawin">Belum Kawin</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="cacat" class="col-sm-2 col-form-label">Penyandang Cacat</label>
				<div class="col-sm-6">
					<select name="cacat" id="cacat" class="custom-select form-control" require>
						<option value="Tuna Netra">Tuna Netra</option>
						<option value="Tuna Wicara">Tuna Wicara</option>
						<option value="TUna Daksa">Tuna Daksa</option>
						<option value="Tuna Grahita">Tuna Grahita</option>
						<option value="Tuna Rungu">Tuna Rungu</option>
						<option value="Tuna Ganda">Tuna Ganda</option>
						<option value="-">-</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4" required placeholder="Alamat"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="foto">Upload Foto</label>
			</div>
			<input class="custom-file file-input form-control" type="file" name="foto" id="foto">

			<div class="form-group row">
				<input class="btn btn-success text-right" type="submit" value="Simpan">
			</div>	
		</form>
	</div>
@endsection