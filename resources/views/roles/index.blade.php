@extends('layouts.app')

@section('content')
	<div class="container-fluid col-md-10">	
		
		<h1 class="text-center">Roles del Sistema</h1>
		@can('roles.create')
			<a class="btn btn-primary btn-sm mb-2" href="{{ url('roles/create') }}"><i class="fa fa-user-plus"></i> Nuevo</a>
		@endcan

		@include('fragment.error')
        @include('fragment.success')
		<table class="table table-hover" id="t_roles">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Slug</th>
					<th>Descripción</th>
					<th>Creado</th>
					<th>Actualizado</th>
				</tr>
			</thead>
		</table>
	</div>
	
	{{ Form::opcionesGroup('role') }}

@endsection