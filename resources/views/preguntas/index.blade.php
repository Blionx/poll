@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Preguntas para la encuesta: {{$enc->name}}</h1>
    <a href="/preguntas/nuevo/{{$enc->id}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nueva Pregunta</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover" id="dataTables-example">
		<thead>
			<th>Pregunta</th>
			<th>Tipo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($preguntas as $p)
			<tr>
				<td>{{$p->name}}</td>
				<td>{{$p->type['nombre']}}</td>
				<td>
					<a href="{{action('Preguntas2Controller@edit',array('id'=>$p->id,'eid'=>$enc->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Editar</a>
					<a href="/preguntas/delete/{{$p->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop