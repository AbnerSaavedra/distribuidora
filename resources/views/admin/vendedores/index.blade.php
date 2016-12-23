@extends('admin.template.main')

@section('title', 'Lista de vendedores')

@section('content')

<div class="container">

	<div class="row">
		
	<div class="col-md-6 col-md-offset-3">

<a href="{{ route('admin.vendedores.create') }}" class="btn btn-info col-md-offset-9">Nuevo vendedor</a><br><br>
<table class="table table-striped">
<thead>
	<th>ID</th>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Acción</th>
</thead>
<tbody>
	@foreach($vendedores as $vendedor)
	<tr>
		<td>{{$vendedor->id}}</td>
		<td>{{$vendedor->cod_vend}}</td>
		<td>{{$vendedor->email_vend}}</td>
		<td><div class="row">
			<a href="{{ route('admin.vendedores.show', $vendedor->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
			<a href="{{ route('admin.vendedores.edit', $vendedor->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
			<a href="{{route('admin.vendedores.destroy', $vendedor->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
		</div></td>
	</tr>
	@endforeach
</tbody>

</table>
{!!$vendedores ->render()!!}

		</div>
	</div>
</div>

@stop