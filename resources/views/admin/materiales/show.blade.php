@extends('admin.template.main')

@section('title', 'Detalle de material')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">

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
</div>
</div>
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
		<td>
			<img src="../../../materiales/{{$material->path}}" width="100px" height="100px">
		</td>
	</tr>
</tbody>
</table>
		</div>
	</div>
</div>

@stop