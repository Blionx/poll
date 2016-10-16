@extends('usersview')
@section('content')
<br>
<br><br><br> <br> <br> <br>
<div class="panel-group" id="acordeon">
	@foreach($companies as $comp)
		<div class="panel panel-info">
		<a data-toggle="collapse" data-parent="#accordeon" href="#c{{$comp->c->id}}">
		   	<div class="panel-heading" >
			   	
			        <h4 class="panel-title">
			            {{$comp->c->name}}
			        </h4>
			    
		    </div>
		    </a>
		    <div id="c{{$comp->c->id}}" class="panel-collapse collapse in">
		        <div class="panel-body">
		        	<div class="panel-group" id="acordionsss">
		        		@foreach($comp->e as $e)
			            <div class="panel panel-success">
			            <a data-toggle="collapse" data-parent="#accordionsss" href="#e{{$e->id}}" aria-expanded="false">
						   	<div class="panel-heading" >
						   	
						        <h4 class="panel-title">
						            {{$e->name}}
						        </h4>
						       
						    </div>
						    </a>
						    <div id="e{{$e->id}}" class="panel-collapse collapse  ">
						        <div class="panel-body text">
						            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						        </div>
						    </div>
						</div>
						@endforeach
					</div>
		        </div>
		    </div>
		</div>
	@endforeach
</div>
@stop