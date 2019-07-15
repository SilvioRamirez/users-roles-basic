<div class="form-group row col-md-6">
	{!! Html::decode(Form::label($name, $show.':', ['class' => 'col-sm-4 col-form-label form-check-label'])) !!}
	<div class="col-sm-8">
		{!! Form::checkbox($name, $value, ['class' => 'form-control form-check-input', 'id' => $name ]) !!}
	</div>			
</div>