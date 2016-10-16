@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Tipos de Preguntas</h1>
    <a href="{{action('TOpcionesController@newer')}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nuevo tipo de pregunta</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover" id="dataTables-example">
		<thead>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($ts as $t)
			<tr>
				<td>{{$t->nombre}}</td>
				<td>
					<a href="{{action('TOpcionesController@edit',array('id'=>$t->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Editar</a> 
					<a href="/opciones/{{$t->id}}" class="btn btn-outline btn-info"><i class="fa fa-th-list"></i> Opciones</a>
					<a href="Topciones/delete/{{$t->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop