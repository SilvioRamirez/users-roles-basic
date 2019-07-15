@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
			
		<a class="btn btn-secondary btn-sm" href="{{ url('/users') }}"><i class="fa fa-chevron-left"></i> Atras</a>

		<div class="col-md-6 offset-md-3">
        <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-user-plus"></i> {{ __('Nuevo Usuario') }}</div>
        <div class="card-body">
        	@include('fragment.error')
        	@include('fragment.success')
			{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}				

				{{ Form::textGroup('name','Nombres y Apellidos') }}
				{{ Form::textGroup('phone','Teléfono') }}
				{{ Form::textGroup('email','Correo') }}
				{{ Form::passwordGroup('password','Contraseña') }}
				{{ Form::passwordGroup('password_confirmation','Confirmar contraseña') }}
				{{ Form::submitGroup() }}

			{!! Form::close() !!}

        </div>
        </div>
    	</div>
	</div>
@endsection