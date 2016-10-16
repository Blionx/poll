@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Usuarios</h1>
    <a href="{{action('UsersController@newer')}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nuevo Usuario</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover" id="dataTables-example">
		<thead>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($users as $u)
			<tr>
				<td>{{$u->name}}</td>
				<td>{{$u->email}}</td>
				<td>
					<a href="{{action('UsersController@edit',array('id'=>$u->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Detalles</a> 
					<a href="usuarios/delete/{{$u->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop