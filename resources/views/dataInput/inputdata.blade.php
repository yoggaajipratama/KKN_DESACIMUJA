<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR APARATUR DESA CIMUJA</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="text-center">
			<h1>Input Data Aparatur</h1>
		</div>
		<br>
		<form class="was-validate" action="{{route('inputAparatur')}}" method="post">		
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
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
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
						<option value="kades">Kades</option>
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
				<label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4" required placeholder="Alamat"></textarea>
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label" for=""></label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="" id="" placeholder="" required>
				</div>
			</div> -->


			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="foto">Upload Foto</label>
				<div class="col-sm-6">
					<input class="custom-file file-input form-control" type="file" name="foto" id="foto">
				</div>
			</div>

			<div class="form-group row">
			<!-- <div class="text-right"> -->
					<input class="btn btn-success text-right" type="submit" value="Simpan">
				<!-- </div> -->
			</div>	
		</form>
	</div>
</body>
</html>