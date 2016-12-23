@extends('admin.template.main')

@section('title', 'Crear dpto')

@section('content')

<div class="container">
	
	<div class="row">
		
		<div class="col-md-4 col-md-offset-4">
			
			<h2>Registrar departamento</h2>

			{!! Form::open(['route'=>'admin.dptos.store', 'method'=>'POST']) !!}

			<div class="form-group">
				
				{!! Form::text('codigo_dpto', null, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>'Código']) !!}

			</div>


			<div class="form-group">
				
				{!! Form::textarea('desc_dpto', null, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>'Descripción', 'rows'=>3, 'cols'=>10]) !!}

			</div>

			<div class="form-group">
				
				{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

			</div>
			{!! Form::close() !!}

		</div>

	</div>

</div>


@stop