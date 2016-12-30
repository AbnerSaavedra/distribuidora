@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

<div class="container">

	<div class="row">
		
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">

				<div class="panel-body">

				<h2 class="col-md-offset-4">Lista de usuarios</h2>

<p><a href="{{ route('admin.usuarios.create') }}" class="btn btn-info col-md-offset-9">Nuevo usuario</a></p>
				</div>

			</div>

<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Acción</th>
</thead>
<tbody>
	@foreach($usuarios as $usuario)

	<tr>
		<td>{{$usuario->id}}</td>
		<td>{{$usuario->name}}</td>
		<td>{{$usuario->email}}</td>
		<td>
		<div class="row">
			<a href="{{ route('admin.usuarios.asignar_rol', $usuario->id) }}" class="btn btn-info" title="Asignar rol"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></a>
			<a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="btn btn-warning" title="Modificar"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			<a href="{{route('admin.usuarios.destroy', $usuario->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')" title="Eliminar"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
		</div></td>
	</tr>

	@endforeach
</tbody>
</table>
{!!$usuarios ->render()!!}

		</div>
	</div>
</div>

@stop