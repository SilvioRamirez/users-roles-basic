@extends('layouts.app')

@section('content')

<h1 class="text-center text-danger display-2"><i class="fa fa-poo"></i> Error 403</h1>
<h1 class="text-center text-danger display-4"><strong>Acción no autorizada</strong></h1>

<hr>

<div class="flex-center position-ref full-height">
    <div class="top-right links text-center">
        <a class="btn btn-secondary " href="{{ url('/') }}"><i class="fas fa-home"></i> Inicio</a>
    </div>
</div>
    
@endsection