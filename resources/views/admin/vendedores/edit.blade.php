@extends('admin.template.main')

@section('title', 'Editar vendedor')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Editar vendedor</h2>
	
{!! Form::open(['route'=>['admin.vendedores.update', $vendedor], 'method' => 'PUT']) !!}

<div class="form-group">

	{!! Form::label('cod_vend', 'Código') !!}
	
	{!!Form::text('cod_vend', $vendedor->cod_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del vendedor'])!!}


</div>

<div class="form-group">

	{!! Form::label('nombre_vend', 'Nombre') !!}

	{!!Form::text('nombre_vend', $vendedor->nombre_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Nombre del vendedor'])!!}

</div>

<div class="form-group">

	{!! Form::label('desc_vend', 'Descripción') !!}
	
	{!!Form::textarea('desc_vend', $vendedor->desc_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del vendedor', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!! Form::label('telefono_vend', 'Teléfono') !!}

	{!!Form::text('telefono_vend', $vendedor->telefono_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Teléfono del vendedor'])!!}

</div>

<div class="form-group">

	{!! Form::label('direc_vend', 'Dirección') !!}
	
	{!!Form::textarea('direc_vend', $vendedor->direc_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Dirección del vendedor', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!! Form::label('email_vend', 'Correo Eléctronico') !!}

	{!!Form::email('email_vend', $vendedor->email_vend, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Correo eléctronico'])!!}

</div>

<div class="form-group">

	{!!Form::select('zona_vend', [''=>'Seleccione la zona.','Centroocidental' => 'Lara','Zuliana' => 'Maracaibo','Zuliana' => 'Ciudad Ojeda'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop