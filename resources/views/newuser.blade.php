@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Nuevo Usuario</h1>
    <a href="{{action('UsersController@index')}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<div class=" row well">
		<form method="post" action="{{action('UsersController@create')}}">
			<div class="col-md-6">
				<div class="form-group">
					<span>Nombre Del Usuario</span>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<span>Contraseña</span>
					<input type="password" name="password" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<span>Correo Electronico</span>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<span>Tipo</span>
					<select class="form-control" name="type">
						<option value="1">Admin</option>
						<option value="2">Usuario</option>
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