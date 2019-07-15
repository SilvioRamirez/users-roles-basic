<div class="form-group row col-md-12">
	{!! Html::decode(Form::label($name, $show.':', ['class' => 'col-sm-4 col-form-label'])) !!}
	<div class="col-sm-8">
		{!! Form::textarea($name, $value, ['class' => 'form-control', 'id' => $name, 'rows' => '2', 'cols' => '10']) !!}
	</div>			
</div>	