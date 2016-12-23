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
		
	<div class="col-md-4 col-md-offset-4">

	<h2>Registrar cliente</h2>
	
{!! Form::open(['route'=>'admin.vendedores.store', 'method' => 'POST']) !!}

<div class="form-group">
	
	{!!Form::text('cod_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Código del vendedor'])!!}


</div>

<div class="form-group">

	{!!Form::text('nombre_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Nombre del vendedor'])!!}

</div>

<div class="form-group">
	
	{!!Form::textarea('desc_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Descripción del vendedor', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!!Form::text('telefono_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Teléfono del vendedor'])!!}

</div>

<div class="form-group">
	
	{!!Form::textarea('direc_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Dirección del vendedor', 'rows' => 3, 'cols' => 40])!!}


</div>

<div class="form-group">

	{!!Form::email('email_vend', null, ['class'=> 'form-control', 'required' => 'required', 'placeholder'=>'Correo eléctronico'])!!}

</div>

<div class="form-group">

	{!!Form::select('zona_vend', [''=>'Seleccione la zona.','Centroocidental' => 'Lara','Zuliana' => 'Maracaibo','Zuliana' => 'Ciudad Ojeda'], ['class'=> 'form-control', 'required' => 'required'])!!}
</div>

<div class="form-group">
	
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close()!!}

</div>

	</div>

</div>

@stop