@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Encuestas</h1>
    <a href="{{action('PollController@new')}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nueva Encuesta</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>tipo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($poll as $u)
			<tr>
				<td>{{$u->name}}</td>
				<td>{{$u->type}}</td>
				<td><a href="{{action('PollController@edit',array('id'=>$u->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Editar</a> <a href="encuestas/delete/{{$u->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop