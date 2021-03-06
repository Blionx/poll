@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Editar tipo de pregunta</h1>
    <a href="/Topciones" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<div class=" row well">
		<form method="post" action="{{action('TOpcionesController@editor',array('id'=>$t->id))}}" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="form-group">
					<span>Nombre Del tipo de preguntas</span>
					<input type="text" name="name" class="form-control" value="{{$t->nombre}}">
				</div>
			</div>
			
			<div class="col-md-12">
				<button type="submit" class="btn btn-outline btn-success pull-right"><i class="fa fa-save"></i> Actualizar</button>
			</div>
		</form>
	</div>
</div>
@stop