@extends('admin.template.main')

@section('title', 'Detalle de vendedor')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-8 col-md-offset-2">

<a href="{{ route('admin.vendedores.index') }}" class="btn btn-info col-md-offset-9">Clientes</a><br><br>
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
		<td>{{$vendedor->id}}</td>
		<td>{{$vendedor->cod_vend}}</td>
		<td>{{$vendedor->nombre_vend}}</td>
		<td>{{$vendedor->desc_vend}}</td>
		<td>{{$vendedor->telefono_vend}}</td>
		<td>{{$vendedor->email_vend}}</td>
		<td>{{$vendedor->direc_vend}}</td>
		<td>{{$vendedor->zona_vend}}</td>
	</tr>
</tbody>
</table>
		</div>
	</div>
</div>

@stop