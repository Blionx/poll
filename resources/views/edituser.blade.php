@extends('encuestas')
@section('content')
<div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#info" data-toggle="tab">Información</a>
                                </li>
                                <li><a href="#company" data-toggle="tab">Empresas</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="info">
                                    <div class="col-lg-12" style="align-items: center; display: flex;">
									    <h1 class=" col-lg-10">Editar Usuario</h1>
									    <a href="{{action('UsersController@index')}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
									    <hr>
									</div>
									<div class="col-lg-12">
										<div class=" row well">
											<form method="post" action="{{action('UsersController@editor',array('id'=>$u->id))}}">
												<div class="col-md-6">
													<div class="form-group">
														<span>Nombre Del Usuario</span>
														<input type="text" name="name" class="form-control" value="{{$u->name}}">
													</div>
													
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<span>Correo Electronico</span>
														<input type="email" name="email" class="form-control" value="{{$u->email}}">
													</div>
													<div class="form-group">
														<span>Tipo</span>
														<select class="form-control" name="type">
															<option value="1" @if($u->type == 1) selected = "selected" @endif >Admin</option>
															<option value="2" @if($u->type == 2) selected = "selected" @endif >Usuario</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<a href="#" class="btn btn-outline btn-primary"><i class="fa fa-refresh"></i> Resetear Clave</a>
													<button type="submit" class="btn btn-outline btn-success pull-right"><i class="fa fa-save"></i> Actualizar</button>
												</div>
											</form>
										</div>
									</div>
                                </div>
                                <div class="tab-pane fade" id="company">
                                    <div class="col-lg-12" style="align-items: center; display: flex;">
									    <h1 class=" col-lg-10">Empresas asociadas</h1>
									    <a data-toggle="modal" data-target="#myModal" class="btn btn-outline btn-success"><i class="fa fa-plus-circle">Asociar Empresa</i></a>
									    <a href="{{action('UsersController@index')}}" class="btn btn-outline btn-primary pull-right"><i class="fa fa-chevron-left"> Regresar</i></a>
									    <hr>
									</div>
									<div class="col-lg-12">
										<div class=" row well">
											<table class="table table-hover">
												<thead>
													<th>Nombre de la empresa</th>
													<th>Opciones</th>
												</thead>
												<tbody>
													@foreach($company as $c)
													<?php $a = $c->company()->get(); ?>
														<tr>
															<td>{{$a[0]->name}}</td>
															<td><a href="/usr_companydelete/{{$c->id}}" class="btn btn-outline btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
														</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-footer">
                                        <div class="col-md-12 well">
                                        <table class="table table-hover">
                                        	<thead>
                                        		<th>Nombre de la empresa</th>
                                        		<th>logo</th>
                                        		<th>Acciones</th>
                                        	</thead>
                                        	<tbody>
                                        		@foreach($enter as $r)
                                        			<tr>
                                        				<td class="text-left">{{$r->name}}</td>
                                        				<td class="col-md-4 text-center"><img src="{{$r->logo}}" width="80%"></td>
                                        				<td>
                                        					<a class="btn btn-success btn-circle btn-xl btn-outline">
                                        						<i class="fa fa-check"></i>
                                        					</a>
                                        				</td>
                                        			</tr>
                                        		@endforeach
                                        	</tbody>
                                        </table>
                                            <button type="button" class="btn btn-outline btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline btn-primary">Save changes</button>
                                         </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
@stop