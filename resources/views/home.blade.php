@extends('templates.view_header_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <?php foreach ($jabatan as $key): ?>
                    <p>{{$key->jabatan}}</p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
@endsection
