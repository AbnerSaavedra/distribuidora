@extends('admin.template.main')

@section('title', 'Lista de materiales')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-8 col-md-offset-2">

<a href="{{ route('admin.materiales.index') }}" class="btn btn-info col-md-offset-9">Materiales</a><br><br>
<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Código</th>
	<th>Descripción</th>
	<th>Dpto.</th>
	<th>Detalles</th>
	<th>Cantidad de venta</th>
	<th>Precio de venta</th>
	<th>Existencias</th>
	<th>Foto</th>
</thead>
<tbody>
	<tr>
		<td>{{$material->id}}</td>
		<td>{{$material->cod_mat}}</td>
		<td>{{$material->desc_mat}}</td>
		<td>{{$material->dpto}}</td>
		<td>{{$material->detalles}}</td>
		<td>{{$material->cantidad_venta}}</td>
		<td>{{$material->precio_venta}}</td>
		<td>{{$material->existencia}}</td>
		<td>{{$material->foto}}</td>
	</tr>
</tbody>
</table>
		</div>
	</div>
</div>

@stop