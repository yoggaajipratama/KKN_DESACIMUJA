@extends('templates.view_header_admin')
@section('content')
	<div class="container-fluid">
		<center>
			<h2>Edit Data Kepengurusan</h2>
		</center>
		<form action="/aparatur/edit" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')
		<table class="table table-light table-bordered">
			<tr>
				<th>Nama Lengkap</th>
				<td><input class="form-control" type="text" name="enama" value="{{$data->nama}}" require></td>
			</tr>

			<tr>
				<th>Jenis Kelamin</th>
				<td>
					<select class="custom-select form-control" name="ejk" value="{{$data->jns_kl}}" require>
						<option value="Pria" {{$data->jns_kl == 'Pria' ? 'selected' : ''}}>Pria</option>
						<option value="Wanita" {{$data->jns_kl == 'Wanita' ? 'selected' : ''}}>Wanita</option>
					</select>
				</td>				
			</tr>

			<tr>
				<th>Tanggal lahir</th>
				<td>
					<input class="form-control" type="date" name="etgllahir" value="{{$data->tgl_lahir}}" require>
				</td>
			</tr>

			<tr>
				<th>Pendidikan</th>
				<td>
                <select class="custom-select form-control" name="ependidikan" value="{{$data->pddk_trkhr}}" require>				                
					<option value="SD" {{$data->pddk_trkhr == 'SD' ? 'selected' : ''}}>SD/Sederajat</option>
					<option value="SLTP" {{$data->pddk_trkhr == 'SLTP' ? 'selected' : ''}}>SLTP/SMP/MTS/Sederajat</option>
					<option value="SLTA" {{$data->pddk_trkhr == 'SLTA' ? 'selected' : ''}}>SLTA/Sederajat</option>
					<option value="D1" {{$data->pddk_trkhr == 'D1' ? 'selected' : ''}}>D1</option>
					<option value="D3" {{$data->pddk_trkhr == 'D3' ? 'selected' : ''}}>D3</option>
					<option value="D4" {{$data->pddk_trkhr == 'D4' ? 'selected' : ''}}>D4</option>
					<option value="S1" {{$data->pddk_trkhr == 'S1' ? 'selected' : ''}}>S1</option>
					<option value="S2" {{$data->pddk_trkhr == 'S2' ? 'selected' : ''}}>S2</option>
					<option value="S3" {{$data->pddk_trkhr == 'S3' ? 'selected' : ''}}>S3</option>
				</select>
				</td>
			</tr>

			<tr>
				<th>Jabatan</th>
				<td>
					<select class="custom-select form-control" name="ejabatan" require>
					@foreach($jabatan as $jbt)
						<option value="{{$jbt->jabatan}}" {{$data->jbtn == $jbt->jabatan ? 'selected' : ''}}>{{$jbt->jabatan}}</option>
					@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<th>Jenis Jabatan</th>
				<td>
					<select class="custom-select form-control" name="ejjb" require>
					@foreach($struktur_jabatan as $jjb)
						<option value="{{$jjb->jenis_jabatan}}" {{$data->jns_jbt == $jjb->jenis_jabatan ? 'selected' : ''}}>{{$jjb->jenis_jabatan}}</option>
					@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<th>Nomor SK</th>
				<td><input type="text" class="form-control" name="skangkat" value="{{$data->skangkat}}" require></td>
			</tr>

			<tr>
				<th>Massa Akhir Jabatan</th>
				<td><input type="date" class="form-control" name="ahirjabatan" value="{{$data->ahirjabatan}}" require></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td>
					<textarea name="keterangan" class="form-control" value="{{$data->keterangan}}" require>{{$data->keterangan}}</textarea>
				</td>
			</tr>

			<tr>
				<th>Instansi Pemerintahan</th>
				<td>
					<select class="custom-select form-control" name="instansi" require>
						<option value="Desa"  {{$data->instansi == 'Desa' ? 'selected' : ''}}>Desa</option>
						<option value="Kesehatan" {{$data->instansi == 'Kesehatan' ? 'selected' : ''}}>Kesehatan</option>
						<option value="Polsek" {{$data->instansi == 'Polsek' ? 'selected' : ''}}>Polsek</option>
						<option value="Koramil" {{$data->instansi == 'Koramil' ? 'selected' : ''}}>Koramil</option>
						<option value="-" {{$data->instansi == '-' ? 'selected' : ''}}>-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>NIP/NRP</th>
				<td>
					<input class="form-control" type="text" name="nip" value="{{$data->nip}}" require>
				</td>
			</tr>
			
			<tr>
				<th>NIK</th>
				<td>
					<input class="form-control" type="text" name="nik" value="{{$data->nik}}" require>
				</td>
			</tr>
			
			<tr>
				<th>Tempat Lahir</th>
				<td>
					<input class="form-control" type="text" name="tmplahir" value="{{$data->tempat_lahir}}" require>
				</td>
			</tr>
			
			<tr>
				<th>Golongan Darah</th>
				<td>
					<select class="custom-select form-control" name="goldar" require>
						<option value="A" {{$data->gol_darah == 'A' ? 'selected' : ''}}>A</option>
						<option value="B" {{$data->gol_darah == 'B' ? 'selected' : ''}}>B</option>
						<option value="O" {{$data->gol_darah == 'O' ? 'selected' : ''}}>O</option>
						<option value="AB" {{$data->gol_darah == 'AB' ? 'selected' : ''}}>AB</option>
						<option value="-" {{$data->gol_darah == '-' ? 'selected' : ''}}>-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Agama</th>
				<td>
					<select class="custom-select form-control" name="agama" require>
						<option value="Islam" {{$data->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
						<option value="Nasrani" {{$data->agama == 'Nasrani' ? 'selected' : ''}}>Nasrani</option>
						<option value="Buddha" {{$data->agama == 'Buddha' ? 'selected' : ''}}>Buddha</option>
						<option value="Hindu" {{$data->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
						<option value="Khonghucu" {{$data->agama == 'Khonghucu' ? 'selected' : ''}}>Khonghucu</option>
						<option value="Lain-Lain" {{$data->agama == 'Lain-Lain' ? 'selected' : ''}}>Lain-Lain</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Jenis Pekerjaan</th>
				<td>
					<select class="custom-select form-control" name="jp" require>
						<option value="Tidak/Belum Bekerja" {{$data->jns_pkrj == '' ? 'selected' : ''}}>Tidak/Belum Bekerja</option>
						<option value="PNS" {{$data->jns_pkrj == 'PNS' ? 'selected' : ''}}>PNS</option>
						<option value="Wiraswasta" {{$data->jns_pkrj == 'Wiraswasta' ? 'selected' : ''}}>Wiraswasta</option>
						<option value="Pelajar/Mahasiswa" {{$data->jns_pkrj == 'Pelajar/Mahasiswa' ? 'selected' : ''}}>Pelajar/Mahasiswa</option>
						<option value="Lain-Lain" {{$data->jns_pkrj == 'Lain-Lain' ? 'selected' : ''}}>Lain-Lain</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Status Kawin</th>
				<td>
					<select class="custom-select form-control" name="statkaw" require>
						<option value="Kawin" {{$data->status_kwn == 'Kawin' ? 'selected' : ''}}>Kawin</option>
						<option value="Belum Kawin" {{$data->status_kwn == 'Belum Kawin' ? 'selected' : ''}}>Belum Kawin</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Penyandang Cacat</th>
				<td>
					<select class="custom-select form-control" name="cacat" value="" require>
						<option value="Tunanetra" {{$data->cacat == 'Tunanetra' ? 'selected' : ''}}>Tunanetra</option>
						<option value="Tunarungu" {{$data->cacat == 'Tunarungu' ? 'selected' : ''}}>Tunarungu</option>
						<option value="Tunawicara" {{$data->cacat == 'Tunawicara' ? 'selected' : ''}}>Tunawicara</option>
						<option value="Tunadaksa" {{$data->cacat == 'Tunadaksa' ? 'selected' : ''}}>Tunadaksa</option>
						<option value="Tunalaras" {{$data->cacat == 'Tunalaras' ? 'selected' : ''}}>Tunalaras</option>
						<option value="Tunagrahita" {{$data->cacat == 'Tunagrahita' ? 'selected' : ''}}>Tunagrahita</option>
						<option value="Tunaganda" {{$data->cacat == 'Tunaganda' ? 'selected' : ''}}>Tunaganda</option>
						<option value="-" {{$data->cacat == '-' ? 'selected' : ''}}>-</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Status Kepengurusan</th>
				<td>
					<select class="custom-select form-control" name="status" require>
						<option value="Aktif" {{$data->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
						<option value="Non Aktif" {{$data->status == 'Non Aktif' ? 'selected' : ''}}>Non Aktif</option>
					</select>
				</td>				
			</tr>

			<tr>
				<th>Alamat</th>
				<td>
					<textarea class="form-control" name="alamat" value="{{$data->alamat}}" require>{{$data->alamat}}</textarea>
				</td>
			</tr>
			
			<tr>
				<th>Upload Foto</th>
				<td>
					<input type="file" name="foto" value="{{$data->foto}}" require disable>
					<h5>Note: max 2 MB, Jenis File : jpeg,png,jpg</h5>
					<img width="150px" src="{{ url('/data_gambar/'.$data->foto) }}">
				</td>
			</tr>
		</table>
		<input type="Submit" value="Simpan" class="btn btn-success">
		</form>
	</div>
@endsection