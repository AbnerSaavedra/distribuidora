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
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Registrar material</h2>
	
{!! Form::open(['route'=>'admin.materiales.store', 'method' => 'POST', 'files'=>true]) !!}

<div class="form-group">
	
	{!!Form::text('cod_mat', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del material'])!!}


</div>

<div class="form-group">

	{!!Form::textarea('desc_mat', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del material', 'rows' => 3, 'cols' => 40])!!}

</div>

<div class="form-group">

	{!!Form::select('dpto', [''=>'Seleccione el dpto.','ligths' => 'Luminarias'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	
	{!!Form::textarea('detalles', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Detalles del material', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">
	
	{!! Form::input('number', 'cantidad_venta', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Cantidad por venta']) !!}

</div>

<div class="form-group">
	
	{!! Form::input('number', 'precio_venta', null, ['class' => 'form-control','step'=>'any', 'required|between:0,99.99', 'placeholder'=>'Precio de venta']) !!}

</div>

<div class="form-group">
	
	{!! Form::input('number', 'existencia', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Existencias']) !!}

</div>

<div class="form-group">
	
	{!! Form::file('foto', null, ['class'=> 'form-control', 'required' => 'required'] )!!}

</div>


<div class="form-group">
	
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop