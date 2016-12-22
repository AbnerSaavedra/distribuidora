@extends('admin.template.main')

@section('title', 'Lista de materiales')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-6 col-md-offset-3">

<a href="{{ route('admin.materiales.create') }}" class="btn btn-info col-md-offset-9">Nuevo material</a><br><br>
<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Código</th>
	<th>Precio de venta</th>
	<th>Existencias</th>
	<th>Acción</th>
</thead>
<tbody>
	@foreach($materiales as $material)

	<tr>
		<td>{{$material->id}}</td>
		<td>{{$material->cod_mat}}</td>
		<td>{{$material->precio_venta}}</td>
		<td>{{$material->existencia}}</td>
		<td><div class="row">
			<a href="{{ route('admin.materiales.show', $material->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
			<a href="{{ route('admin.materiales.edit', $material->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			<a href="{{route('admin.materiales.destroy', $material->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
		</div></td>
	</tr>

	@endforeach
</tbody>
</table>
{!!$materiales ->render()!!}

		</div>
	</div>
</div>

@stop