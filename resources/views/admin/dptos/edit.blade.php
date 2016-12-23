@extends('admin.template.main')

@section('title', 'Editar dpto')

@section('content')

<div class="container">
	
	<div class="row">
		
		<div class="col-md-4 col-md-offset-4">
			
			<h2>Editar departamento</h2>

			{!! Form::open(['route'=>['admin.dptos.update', $dpto], 'method'=>'PUT']) !!}

			<div class="form-group">
				
				{!! Form::text('codigo_dpto', $dpto->codigo_dpto, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>'Código']) !!}

			</div>


			<div class="form-group">
				
				{!! Form::textarea('desc_dpto', $dpto->desc_dpto, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>'Descripción', 'rows'=>3, 'cols'=>10]) !!}

			</div>

			<div class="form-group">
				
				{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

			</div>
			{!! Form::close() !!}

		</div>

	</div>

</div>


@stop