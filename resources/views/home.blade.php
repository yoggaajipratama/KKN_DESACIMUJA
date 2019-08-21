@extends('templates.view_header_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <?php for ($i=1; $i < 11; $i++) { 
                    echo $i.". ";
                    echo "<br>";
                } ?>
            </div>
        </div>
    </div>
</div>
@endsection
