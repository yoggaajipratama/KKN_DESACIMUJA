@extends('data_print.templates.view_header')
@section('title','PERANGKAT DESA CIMUJA')
@section('content')
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<h4 style="text-decoration: underline;">
				<strong>BIODATA PERANGKAT DESA CIMUJA</strong>
			</h4>
		</div>
		<div class="row align-items-center justify-content-center">
			<h6>
				<strong>NIK: <?= $nik='123456789'; ?></strong>
			</h6>
		</div>
	</div>
	<div class="container">
		<h6><strong>DATA PERSONAL</strong></h6>

	</div>
	<div class="container">
		<h6><strong>DATA KEPEMILIKAN DOKUMEN</strong></h6>

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
						<h6><strong>EUIS</strong></h6>
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
@stop