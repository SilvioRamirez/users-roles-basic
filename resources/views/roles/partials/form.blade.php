{{ Form::textGroup('name','Nombre') }}
{{ Form::textGroup('slug','Slug - Clave') }}
{{ Form::textGroup('description','Descripción') }}
<hr>
<h3><i class="fa fa-user-tie"></i> Permiso Especial</h3>
<div class="form-group">
	<label>{{ Form::radio('special', 'all-access') }} Acceso Total</label>
	<label>{{ Form::radio('special', 'no-access') }} Ningun Acceso</label>
</div>
<hr>

<h3><i class="fa fa-user-check"></i> Lista de Permisos</h3>
<div class="form-check">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
			<li>
				<label class="form-check-label">
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?: 'Sin Descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>