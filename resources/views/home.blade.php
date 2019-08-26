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
                            <td>
                                <?php foreach ($struktur_jabatan as $key): ?>
                                <form action="{{url('/daftaraparatur/'.$key->jenis_jabatan)}}" method="get">
                                     <input type="hidden" name="jenis_jabatan" value="{{$key->jenis_jabatan}}">
                                     <button type="submit" class="btn btn-danger">
                                        <p>{{$key->jenis_jabatan}}</p>
                                    </button>
                                </form>
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
