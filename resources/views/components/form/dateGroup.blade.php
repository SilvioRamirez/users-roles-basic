<div class="form-group row date col-md-12" id='{{$name}}' data-target-input="nearest">
	{!! Html::decode(Form::label($name, $show.':', ['class' => 'col-sm-4 col-form-label text-md-right'])) !!}
	<div class="col-sm-8">
	{!! Form::text($name, $value, ['class' => 'form-control datetimepicker-input datetimepicker', 'data-target' => '#'.$name, 'id' => $name, 'data-toggle' => 'datetimepicker']) !!}
	</div>			
</div>