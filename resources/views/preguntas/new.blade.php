@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Nueva pregunta para la Encuesta: {{$enc->name}}</h1>
    <a href="/preguntas/{{$enc->id}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<div class=" row well">
		<form method="post" action="{{action('Preguntas2Controller@create',array('id'=>$enc->id))}}" enctype="multipart/form-data">
			<div class="col-md-6">
				<div class="form-group">
					<span>Pregunta</span>
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<span>Tipo de Pregunta</span>
					<select name="type" class="form-control">
						@foreach($tipos as $c)
						<option value="{{$c->id}}">{{$c->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			
			<div class="col-md-12">
				<button type="submit" class="btn btn-outline btn-success pull-right"><i class="fa fa-save"></i> Guardar</button>
			</div>
		</form>
	</div>
</div>
@stop