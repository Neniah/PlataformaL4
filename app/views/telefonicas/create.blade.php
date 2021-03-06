@extends('layouts.main')


@section('contenido')

<div class="container">
	<div class="row">
	<div class="jumbotron">
		<h1 class="text-center">Nueva Consulta Telefónica</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		@if($errors->has())
			<div class="alert alert-danger col-md-offset-2">
				@foreach($errors->all('<p>:message</p>') as $message)
					{{$message}}
				@endforeach
			</div>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-7">
		<div class="form">
			{{Form::open(['url' => 'telefonicas'])}}
			<div class="form-group">
				{{Form::label('user_id', 'Cliente')}}
				{{Form::select('user_id', $clientes,null,['class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('asistente_id', 'Asistente')}}
				{{Form::select('asistente_id', $asistentes,null,['class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('lugar', 'Lugar')}}
				{{Form::text('lugar', Input::old('lugar'), ['class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('fecha', 'Fecha')}}
				{{ Form::text('fecha', '', array('class' => 'form-control', 'data-datepicker' => 'datepicker')) }}
			</div>

			<div class="form-group">
				{{Form::label('informacion', 'Información')}}
				{{Form::textarea('informacion', Input::old('informacion'), ['class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('observaciones', 'Observaciones')}}
				{{Form::textarea('observaciones', Input::old('observaciones'), ['class' => 'form-control'])}}
			</div>
			<div class="form-group">
					{{Form::label('anexos', 'Anexos')}}
					{{Form::textarea('anexos', Input::old('anexos'), ['class' => 'form-control'])}}
		
			</div>
			<div class="form-group">
				{{Form::label('firma', 'Firma')}}
				{{Form::text('firma', Input::old('firma'), ['class' => 'form-control'])}}
			</div>
			

		
			

			{{Form::submit('Guardar Consulta Telefónica', ['class' => 'btn btn-primary'])}}
			{{Form::close()}}
		</div>
	</div>
</div>
</div>



@stop