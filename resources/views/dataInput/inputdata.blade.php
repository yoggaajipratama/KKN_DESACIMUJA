@extends('templates.view_header_admin')
@section('content')
	<div class="container-fluid">
		<center>
			<h2>Tambah Data Kepengurusan</h2>
		</center>
		<table class="table table-light table-bordered">
			<tr>
				<th>Nama Lengkap</th>
				<td><input class="form-control" type="text" name=""></td>
			</tr>

			<tr>
				<th>Jenis Kelamin</th>
				<td>
					<select>
						<option>Pria</option>
						<option>Wanita</option>
					</select>
				</td>				
			</tr>

			<tr>
				<th>Tanggal lahir</th>
				<td>
					<input class="form-control" type="date" name="">
				</td>
			</tr>

			<tr>
				<th>Pendidikan</th>
				<td>
					<select>
						<option>SD</option>
						<option>SMP</option>
						<option>SMA</option>
						<option>S1</option>
						<option>S2</option>
						<option>S3</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Jabatan</th>
				<td>
					<select>
						<option>DB</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Nomor SK</th>
				<td><input type="text" class="form-control" name=""></td>
			</tr>

			<tr>
				<th>Masa Berakhir Jabatan</th>
				<td><input type="date" class="form-control" name=""></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td>
					<textarea name="" class="form-control"></textarea>
				</td>
			</tr>

			<tr>
				<th>Instansi Pemerintahan</th>
				<select>
					<option></option>
				</select>
			</tr>
			
			<tr>
				<th>NIP/NRP</th>
				<td>
					<input class="form-control" type="text" name="">
				</td>
			</tr>
			
			<tr>
				<th>NIK</th>
				<td>
					<input class="form-control" type="text" name="">
				</td>
			</tr>
			
			<tr>
				<th>Tempat Lahir</th>
				<td>
					<input class="form-control" type="text" name="">
				</td>
			</tr>
			
			<tr>
				<th>Golongan Darah</th>
				<td>
					<select>
						<option></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Agama</th>
				<td>
					<select>
						<option>Islam</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Jenis Pekerjaan</th>
				<td>
					<select>
						<option></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Status Kawin</th>
				<td>
					<select>
						<option></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Penyandang Cacat</th>
				<td>
					<select>
						<option></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Alamat</th>
				<td>
					<textarea class="form-control" name=""></textarea>
				</td>
			</tr>
			
			<tr>
				<th>Upload Foto</th>
				<td>
					<input type="file" name="">
				</td>
			</tr>
		</table>
	</div>
@endsection