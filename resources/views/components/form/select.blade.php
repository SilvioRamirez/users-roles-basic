<div class="form-group row col-md-12">
	{!! Html::decode(Form::label($name, $show.':', ['class' => 'col-sm-4 col-form-label text-md-right'])) !!}
	<div class="col-sm-8">
		{!! Form::select($name, $options, $value, ['class' => 'form-control', 'id' => $name ]) !!}
	</div>			
</div>