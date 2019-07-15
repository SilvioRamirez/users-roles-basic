@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<a class="btn btn-secondary btn-sm" href="{{ url('/users') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		
		<div class="col-md-6 offset-md-3">
        <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-trash-alt"></i> {{ __('Eliminar Usuario') }}</div>
        <div class="card-body">			
        	@include('fragment.error')
        	@include('fragment.success')
			{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
				
				<h2 class="text-center">¿Está segur@ de eliminar al usuario <strong>{{ $user->name }}</strong>?</h2>
				<hr>
				{{ Form::deleteGroup() }}

			{!! Form::close() !!}

        </div>
        </div>
    	</div>
	</div>
@endsection
