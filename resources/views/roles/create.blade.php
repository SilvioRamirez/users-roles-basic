@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		
		<a class="btn btn-secondary btn-sm" href="{{ url('/roles') }}"><i class="fa fa-chevron-left"></i> Atras</a>

		<div class="col-md-8 offset-2">
        <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-user-plus"></i> {{ __('Nuevo Rol') }}</div>
        <div class="card-body">
        	@include('fragment.error')
        	@include('fragment.success')
			{!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
				
				@include('roles.partials.form')
			
			{{ Form::submitGroup() }}

			{!! Form::close() !!}

        </div>
        </div>
    	</div>
	</div>
@endsection
