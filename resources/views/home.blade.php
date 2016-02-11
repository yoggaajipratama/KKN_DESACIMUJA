@extends('templates.view_header_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center">
                    <h2><strong>DATA PEMERINTAHAN DAN LEMBAGA</strong></h2>
                </div>
                <div class="container">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Jenis Jabatan</th>
                        </tr>
                        <tr>
                            <td>
                            <?php foreach ($struktur_jabatan as $key): ?>
                                <p>{{$key->id}}</p>
                            <?php endforeach ?>
                            </td>
                            <td>
                            <?php foreach ($struktur_jabatan as $key): ?>
                                <a href="{{route('daftaraparatur')}}">
                                    <p style="color: black">{{$key->jenis_jabatan}}</p>
                                </a>
                            <?php endforeach ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
