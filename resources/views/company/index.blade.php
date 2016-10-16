@extends('encuestas')
@section('content')
<div class="col-lg-12" style="align-items: center; display: flex;">
    <h1 class=" col-lg-10">Empresas</h1>
    <a href="{{action('CompanyController@newer')}}" class="btn btn-outline btn-success pull-right"><i class="fa fa-plus-circle">Nueva Empresa</i></a>
    <hr>
</div>
<div class="col-lg-12">
	<table class="table table-hover" id="dataTables-example">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Logo</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($company as $u)
			<tr>
				<td>{{$u->name}}</td>
				<td>{{$u->email}}</td>
				<td class="col-md-2"><img src="{{$u->logo}}" style="max-width: 100%;"></td>
				<td><a href="{{action('CompanyController@edit',array('id'=>$u->id))}}" class="btn btn-outline btn-primary"><i class="fa fa-edit"></i> Editar</a> <a href="company/delete/{{$u->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop