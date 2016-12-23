@extends('admin.template.main')

@section('title', 'Detalle de cliente')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-8 col-md-offset-2">

<a href="{{ route('admin.clientes.index') }}" class="btn btn-info col-md-offset-9">Clientes</a><br><br>
<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Código</th>
	<th>Nombre</th>
	<th>Descripción</th>
	<th>Teléfono</th>
	<th>Email</th>
	<th>Dirección</th>
	<th>Zona</th>
</thead>
<tbody>
	<tr>
		<td>{{$cliente->id}}</td>
		<td>{{$cliente->cod_cli}}</td>
		<td>{{$cliente->nombre_cli}}</td>
		<td>{{$cliente->desc_cli}}</td>
		<td>{{$cliente->telefono_cli}}</td>
		<td>{{$cliente->email_cli}}</td>
		<td>{{$cliente->direc_cli}}</td>
		<td>{{$cliente->zona_cli}}</td>
	</tr>
</tbody>
</table>
		</div>
	</div>
</div>

@stop