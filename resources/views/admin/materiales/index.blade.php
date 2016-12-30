@extends('admin.template.main')

@section('title', 'Lista de materiales')

@section('content')

<div class="container">
	<div class="row">	
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					{!! Form::open(['route'=>'admin.materiales.index', 'method' => 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
						<div class="form-group">
							{!! Form::text('cod_mat', null, ['class'=>'form-control', 'placeholder'=>'Buscar material'] ) !!}
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        				</div>
					{!! Form::close() !!}

					<h2 class="col-md-offset-4">Lista de materiales</h2>
					<p>
						<a href="{{ route('admin.materiales.create') }}" class="btn btn-info">Nuevo material</a>
					</p>
				</div>
			</div>
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