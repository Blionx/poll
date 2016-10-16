@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Preguntas para la encuesta: {{$ty->nombre}}</h1>
    <a href="/opciones/nuevo/{{$ty->id}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nueva Pregunta</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover" id="dataTables-example">
		<thead>
			<th>Pregunta</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($preg as $p)
			<tr>
				<td>{{$p->name}}</td>
				<td>
					<a href="{{action('OpcionesController@edit',array('id'=>$p->id,'tid'=>$ty->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Editar</a>
					<a href="/opciones/delete/{{$p->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop