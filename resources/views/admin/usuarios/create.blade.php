@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Registrar usuario</h2>
	
{!! Form::open(['route'=>'admin.usuarios.store', 'method' => 'POST'])!!}

<div class="form-group">
	
	{!!Form::text('name', null, ['class'=> 'form-control', 'required', 'placeholder'=>'Nombre'])!!}


</div>

<div class="form-group">

	{!!Form::email('email', null, ['class'=> 'form-control', 'required', 'placeholder'=>'example@correo.com'])!!}

</div>

<div class="form-group">

	{!!Form::password('password', ['class'=> 'form-control', 'required', 'placeholder'=>'*********'])!!}


</div>


<div class="form-group">
	
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop