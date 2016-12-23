@extends('admin.template.main')

@section('title', 'Editar material')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Editar material</h2>
	
{!! Form::open(['route'=>['admin.materiales.update', $material], 'method' => 'PUT','files'=>true])!!}
<div class="form-group">
	
</div>
<div class="form-group">
	{!! Form::label('cod_mat', 'Código')!!}

	{!!Form::text('cod_mat', $material->cod_mat, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del material'])!!}
</div>

<div class="form-group">
{!! Form::label('desc_mat', 'Descripción')!!}

	{!!Form::textarea('desc_mat', $material->desc_mat, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del material', 'rows' => 3, 'cols' => 40])!!}

</div>

<div class="form-group">
{!! Form::label('dpto', 'Departamento')!!}

	{!!Form::select('dpto', [''=>'Seleccione el dpto.','ligths' => 'Luminarias'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('detalles', 'Detalles')!!}
	
	{!!Form::textarea('detalles', $material->detalles, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Detalles del material', 'rows' => 3, 'cols' => 40])!!}
</div>

<div class="form-group">
	{!! Form::label('cantidad_venta', 'Cantidad de venta')!!}

	{!! Form::input('number', 'cantidad_venta', $material->cantidad_venta, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Cantidad por venta']) !!}

</div>

<div class="form-group">
	{!! Form::label('precio_venta', 'Precio de venta')!!}

	{!! Form::input('number', 'precio_venta', $material->precio_venta, ['class' => 'form-control','step'=>'any', 'required|between:0,99.99', 'placeholder'=>'Precio de venta']) !!}
</div>
<div class="form-group">
	{!! Form::label('exitencia', 'Existencia')!!}

	{!! Form::input('number', 'existencia', $material->existencia, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Existencias']) !!}

</div>

<div class="form-group">
	{!! Form::label('foto', 'Foto')!!}
	
	{!! Form::file('foto', ['class'=> 'form-control'] )!!}

</div>

<div class="form-group">
	
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop