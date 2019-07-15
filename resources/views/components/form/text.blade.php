<div class="form-group row">
	{!! Html::decode(Form::label($name, '<strong>'.$show.':</strong>', ['class' => 'col-sm-4 col-form-label text-md-right'])) !!}
	<div class="col-sm-8">
		{!! Form::text($name, $value, ['class' => 'form-control', 'id' => $name]) !!}
	</div>			
</div>