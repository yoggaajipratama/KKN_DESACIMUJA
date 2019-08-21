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
	<h1>Input Data Aparatur</h1>
	<form action="route('inputAparatur')">
		<label>Nama	: </label>
		<input type="text" name="nama"><br>
		<label>Jenis Kelamin : </label>
		<select>
		<option value="Laki-Laki">Laki-Laki</option>
		<option value="Perempuan">Perempuan</option>
		</select><br>
		<label>Tanggal Lahir</label>
		<input type="date" name="tgllahir"><br>
		<label>Pendidikan</label>
		<select>
			<option value="SD">SD</option>
			<option value="SMP">SMP</option>
			<option value="SMA">SMA</option>
			<option value="S1">S1</option>
			<option value="S2">S2</option>
			<option value="S3">S3</option>
		</select><br>
		<label>Jabatan</label>
	</form>
</body>
</html>