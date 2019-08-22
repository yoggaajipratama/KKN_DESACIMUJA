@extends('templates.view_header_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row justify-content-center">
                    <h5><strong>Masukkan Data Jabatan Baru</strong></h5>
                </div>
                <input type="text" name="jabatan">

                <div class="row justify-content-center">
                    <h5><strong>Masukkan Nomor Induk Kependudukan Penambah</strong></h5>
                </div>
                <input type="text" name="jabatan">
                
                <button class="btn btn-success" onclick="return confirm('Yakin data akan disimpan? ')">Simpan</button>
            </div>
            <div class="card">
                <div class="row justify-content-center">
                    <h5><strong>Data Jabatan Tersedia Saat Ini</strong></h5>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
