@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Editar Encuesta</h1>
    <a href="{{action('PollController@index')}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<div class=" row well">
		<form method="post" action="{{action('PollController@editor',array('id'=>$e->id))}}">
			<div class="col-md-6">
				<div class="form-group">
					<span>Nombre De la Encuesta</span>
					<input type="text" name="name" class="form-control" value="{{$e->name}}">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<span>Tipo</span>
					<select class="form-control" name="type">
						<option value="0" @if($e->type == 0) selected = "selected" @endif >Admin</option>
						<option value="1" @if($e->type == 1) selected = "selected" @endif >Usuario</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-outline btn-success pull-right"><i class="fa fa-save"></i> Actualizar</button>
			</div>
		</form>
	</div>
</div>
@stop