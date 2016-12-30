@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

<div class="container">

@if($errors->has())
            <div class="alert alert-warning" role="alert">
               @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
        @endif </br>

<div class="row">
		
	<div class="col-md-12 col-md-offset-0">

		<div class="panel panel-default">

			<div class="panel-body">

			<h2 class="col-md-offset-5">Registrar material</h2>

		</div>

			</div>
	
{!! Form::open(['route'=>'admin.materiales.store', 'method' => 'POST', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}

<div class="col-md-6 panel-body">
	
	<div class="form-group">
	
	{!!Form::text('cod_mat', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del material'])!!}


</div>

<div class="form-group">

	{!!Form::textarea('desc_mat', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del material', 'rows' => 3, 'cols' => 40])!!}

</div>

<div class="form-group">
	
	{!!Form::textarea('detalles', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Detalles del material', 'rows' => 3, 'cols' => 40])!!}


</div>

</div>

<div class="col-md-6 panel-body">
	
	<div class="form-group">
	
	{!! Form::input('number', 'cantidad_venta', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Cantidad por venta']) !!}

</div>

<div class="form-group">
	
	{!! Form::input('number', 'precio_venta', null, ['class' => 'form-control','step'=>'any', 'required|between:0,99.99', 'placeholder'=>'Precio de venta']) !!}

</div>

<div class="form-group">

	{!!Form::select('dpto', [''=>'Seleccione el dpto.','ligths' => 'Luminarias'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	
	{!! Form::input('number', 'existencia', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Existencias']) !!}

</div>

<div class="form-group">
	
	{!! Form::file('path', null, ['class'=> 'form-control', 'required' => 'required', 'accept'=>'image/*'] )!!}

</div>


<div class="form-group">
	
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

</div>


</div>


{!! Form::close()!!}

</div>

	</div>

</div>

@stop