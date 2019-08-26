@extends('templates.view_header_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route('tambah_jabatan')}}" method="POST">
                <div class="card">
                    <div class="row justify-content-center">
                        <h5><strong>Masukkan Data Jabatan Baru</strong></h5>
                    </div>
                    <input type="text" name="jabatan">

                    <div class="row justify-content-center">
                        <h5><strong>Masukkan Nomor Induk Kependudukan Penambah</strong></h5>
                    </div>
                    <input type="text" name="jabatan">

                    <div class="row justify-content-center">
                        <h5><strong>Jenis Jabatan</strong></h5>
                    </div>
                    <select name="jenis_jabatan">
                        <?php foreach ($jenis_jabatan as $key): ?>
                            <option>{{$key->jenis_jabatan}}</option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-success" onclick="return confirm('Apakah anda yakin? ')">
                </div>
            </form>
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
