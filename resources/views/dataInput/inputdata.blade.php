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
		<form action="{{route('inputAparatur')}}" method="post">
		@csrf 
			<label>Nama	: </label>
			<input type="text" name="nama"><br>
			<label>Jenis Kelamin : </label>
			<select name="jk">
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
			</select><br>
			<label>Tanggal Lahir</label>
			<input type="date" name="tgllahir"><br>
			<label>Pendidikan</label>
			<select name="pendidikan">
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select><br>
			<label>Jabatan</label>
			<select name="jabatan">
				<option value="kades">Kades</option>
			</select><br>
			<label>No SK Pengangkatan</label>
			<input type="number" name="skangkat"><br>
			<label for="">Masa Berakhir Jabatan</label>
			<input type="number" name="ahirjabatan"><br>
			<label for="keterangan">Keterangan</label>
			<textarea name="keterangan" id="keterangan" cols="30" rows="4"></textarea><br>
			<label for="instansi">Instansi Pemerintahan</label>
			<select name="instansi" id="">
				<option value="kesehatan">Kesehatan</option>
				<option value="koramil">Koramil</option>
				<option value="polsek">Polsek</option>
			</select><br>
			<label for="">NIP / NRP</label>
			<input type="number" name="nip" id=""><br>
			<label for="">Foto</label>
			<input type="file" name="foto" id=""><br><br>
			<div class="text-right">
				<input class="btn btn-success text-right" type="submit" value="Simpan">
			</div>	
		</form>
	</div>
</body>
</html>