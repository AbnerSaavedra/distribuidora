@extends('admin.template.main')

@section('title', 'Lista de dptos')

@section('content')

<div class="container">

	<div class="row">
		
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
	
				<div class="panel-body">

	<h2 class="col-md-offset-4">Lista de departamentos</h2>

	<p><a href="{{ route('admin.dptos.create') }}" class="btn btn-info col-md-offset-9">Nuevo dpto</a></p>

				</div>

			</div>

<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Código</th>
	<th>Descripción</th>
</thead>
<tbody>
	@foreach($dptos as $dpto)
	<tr>
		<td>{{$dpto->id}}</td>
		<td>{{$dpto->codigo_dpto}}</td>
		<td>{{$dpto->desc_dpto}}</td>
		<td><div class="row">
			<a href="{{ route('admin.dptos.edit', $dpto->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
			<a href="{{route('admin.dptos.destroy', $dpto->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
		</div></td>
	</tr>

	@endforeach
</tbody>
</table>
{!!$dptos ->render()!!}
</div>
</div>
</div>

@stop