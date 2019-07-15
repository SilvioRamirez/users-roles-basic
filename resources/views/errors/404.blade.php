@extends('layouts.app')

@section('content')

<h1 class="text-center text-danger display-2"><i class="fa fa-frown"></i> Error 404</h1>
<h1 class="text-center text-danger display-4"><strong>Esta ruta no existe</strong></h1>

<hr>

<div class="flex-center position-ref full-height">
	<div class="top-right links text-center">
		<a class="btn btn-secondary " href="{{ url('/') }}"><i class="fas fa-home"></i> Inicio</a>
	</div>
</div>
    
@endsection