@extends('templates.view_header_admin')

@section('content')
<div class="container">
<h2><strong>DATA PEMERINTAHAN DAN LEMBAGA</strong></h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <?php foreach ($jabatan as $key): ?>
                    <a href="{{route('daftaraparatur')}}">
                        <p> &nbsp; >> {{$key->jabatan}}</p>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
@endsection
