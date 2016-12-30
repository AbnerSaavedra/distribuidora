@extends('admin.template.main')

@section('title', 'Crear cliente')

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

					<h2 class="col-md-offset-5">Registrar cliente</h2>

				</div>
				
			</div>	
	
{!! Form::open(['route'=>'admin.clientes.store', 'method' => 'POST']) !!}

<div class="col-md-6">
	
	<div class="form-group">
	
	{!!Form::text('cod_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del cliente'])!!}


</div>

<div class="form-group">

	{!!Form::text('nombre_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Nombre del cliente'])!!}

</div>

<div class="form-group">
	
	{!!Form::textarea('desc_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del cliente', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!!Form::text('telefono_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Teléfono del cliente'])!!}

</div>


</div>

<div class="col-md-6">
	
	<div class="form-group">
	
	{!!Form::textarea('direc_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Dirección del cliente', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!!Form::email('email_cli', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Correo eléctronico'])!!}

</div>

<div class="form-group">

	{!!Form::select('zona_cli', [''=>'Seleccione la zona.','Centroocidental' => 'Lara','Zuliana' => 'Maracaibo','Zuliana' => 'Ciudad Ojeda'], ['class'=> 'form-control', 'required' => 'required'])!!}
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