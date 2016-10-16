@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Nueva Opcion para el tipo de pregunta: {{$ty->nombre}}</h1>
    <a href="/opciones/{{$ty->id}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<div class=" row well">
		<form method="post" action="{{action('OpcionesController@create',array('id'=>$ty->id))}}" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="form-group">
					<span>Opcion</span>
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			
			<div class="col-md-12">
				<button type="submit" class="btn btn-outline btn-success pull-right"><i class="fa fa-save"></i> Guardar</button>
			</div>
		</form>
	</div>
</div>
@stop