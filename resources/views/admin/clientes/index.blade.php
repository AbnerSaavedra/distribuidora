@extends('admin.template.main')

@section('title', 'Lista de cliente')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-6 col-md-offset-3">

<a href="{{ route('admin.clientes.create') }}" class="btn btn-info col-md-offset-9">Nuevo cliente</a><br><br>
<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Acción</th>
</thead>
<tbody>
	@foreach($clientes as $cliente)
	<tr>
		<td>{{$cliente->id}}</td>
		<td>{{$cliente->cod_cli}}</td>
		<td>{{$cliente->email_cli}}</td>
		<td><div class="row">
			<a href="{{ route('admin.clientes.show', $cliente->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
			<a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
			<a href="{{route('admin.clientes.destroy', $cliente->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
		</div></td>
	</tr>
	@endforeach
</tbody>

</table>
{!!$clientes ->render()!!}

		</div>
	</div>
</div>

@stop