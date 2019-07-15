@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<a class="btn btn-secondary btn-sm" href="{{ url('/users') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		
		<div class="col-md-6 offset-3">
        <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-edit"></i> {{ __('Actualizar Usuario') }}</div>
        <div class="card-body">
			
        	@include('fragment.error')
        	@include('fragment.success')
			{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
				{{ Form::textGroup('name','Nombres y Apellidos') }}
				{{ Form::textGroup('phone','Telefono') }}
				{{ Form::textGroup('email','Correo') }}

					<hr>
					<h3>Lista de Roles</h3>
					<div class="form-check">
						<ul class="list-unstyled">
							@foreach($roles as $role)
							<li>
								<label class="form-check-label">
									{{ Form::checkbox('roles[]', $role->id, null) }}
									{{ $role->name }}
									<em>({{ $role->description ?: 'Sin Descripción' }})</em>
								</label>
							</li>
							@endforeach
						</ul>
					</div>
					<hr>
				{{ Form::submitGroup() }}
			{!! Form::close() !!}
        </div>
        </div>
    	</div>
	</div>
@endsection
