@extends('admin.template.main')

@section('title', 'Editar cliente')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Editar cliente</h2>
	
{!! Form::open(['route'=>['admin.clientes.update', $cliente], 'method' => 'PUT']) !!}

<div class="form-group">

	{!! Form::label('cod_cli', 'Código') !!}
	
	{!!Form::text('cod_cli', $cliente->cod_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del cliente'])!!}


</div>

<div class="form-group">

	{!! Form::label('nombre_cli', 'Nombre') !!}

	{!!Form::text('nombre_cli', $cliente->nombre_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Nombre del cliente'])!!}

</div>

<div class="form-group">

	{!! Form::label('desc_cli', 'Descripción') !!}
	
	{!!Form::textarea('desc_cli', $cliente->desc_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del cliente', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!! Form::label('telefono_cli', 'Teléfono') !!}

	{!!Form::text('telefono_cli', $cliente->telefono_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Teléfono del cliente'])!!}

</div>

<div class="form-group">

	{!! Form::label('direc_cli', 'Dirección') !!}
	
	{!!Form::textarea('direc_cli', $cliente->direc_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Dirección del cliente', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!! Form::label('email_cli', 'Correo Eléctronico') !!}

	{!!Form::email('email_cli', $cliente->email_cli, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Correo eléctronico'])!!}

</div>

<div class="form-group">

	{!!Form::select('zona_cli', [''=>'Seleccione la zona.','Centroocidental' => 'Lara','Zuliana' => 'Maracaibo','Zuliana' => 'Ciudad Ojeda'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop