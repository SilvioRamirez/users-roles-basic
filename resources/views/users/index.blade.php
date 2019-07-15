@extends('layouts.app')

@section('content')
	<div class="container-fluid col-md-10">	
		
		<h1 class="text-center">Usuarios del Sistema</h1>
		@can('users.create')
			<a class="btn btn-primary btn-sm mb-2" href="{{ url('users/create') }}"><i class="fa fa-user-plus"></i> Nuevo</a>
		@endcan
	
		@include('fragment.error')
        @include('fragment.success')
		<table class="table table-hover" id="t_users">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Correo</th>
					<th>Creado</th>
					<th>Actualizado</th>
				</tr>
			</thead>
		</table>
	</div>
	
	{{ Form::opcionesGroup('user') }}
@endsection
