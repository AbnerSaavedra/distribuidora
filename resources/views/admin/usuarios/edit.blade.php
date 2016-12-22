@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Editar usuario</h2>
	
{!! Form::open(['route'=>['admin.usuarios.update', $usuario], 'method' => 'PUT'])!!}

<div class="form-group">
	
	{!!Form::text('name', $usuario->name, ['class'=> 'form-control', 'required', 'placeholder'=>'Nombre'])!!}


</div>

<div class="form-group">

	{!!Form::email('email', $usuario->email, ['class'=> 'form-control', 'required', 'placeholder'=>'example@correo.com'])!!}

</div>

<div class="form-group">
	
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop