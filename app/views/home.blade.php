@extends('layout')

@section('content')

<div class="row marketing">
	
	<div id="intro">
		<div class="slider">
			<div>{{ HTML::image('img/slider/img1.png') }}</div>
			<div>{{ HTML::image('img/slider/img2.png') }}</div>
			<div>{{ HTML::image('img/slider/img3.png') }}</div>	
		</div>
	</div>

	<div id="about">
		<div class="col-xs-4">
			<img src="img/social/usa.png">
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div class="col-xs-4">
			<img src="img/social/usa.png">
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div class="col-xs-4">
			<img src="img/social/usa.png">
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div style="margin-top:20%"> 
			<div class="col-xs-6">
				<h2>Nuestros Valores</h2>
			</div>
			<div class="col-xs-6">
				<i>¿Quieres Conocernos Mejor <spam><img src="img/social/help.png" style="width:5%;"></spam></i>
			</div>
		</div>
	</div>

	<div id="programs">
		
		<h2>{{ Lang::get('text.programs.0') }}</h2>
		
		<a class="program" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/1')}}" data-title="pizza" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>{{ Lang::get('text.programs.1') }}</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		
		<a class="program" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/2')}}" data-title="cachapa" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>{{ Lang::get('text.programs.2') }}</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		
		<a class="program" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/3')}}" data-title="" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>{{ Lang::get('text.programs.3') }}</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		
		<a class="program" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/4')}}" data-title="" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>{{ Lang::get('text.programs.4') }}</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		        	<div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                	<span aria-hidden="true">&times;</span>
		                </button>
		        		<h4 class="modal-title" id="myModalLabel"></h4>
		            </div>
		            <div class="modal-body">
		                <div class="info"></div>
		                <div class="price"></div>
		            </div>
		      		<div class="modal-footer">
		        		<a class="btn btn-primary pizza">Save changes</a>
		      		</div>
		    	</div>
		  	</div>
		</div>

	</div>

	<div id="gallery">
		
		<h2 class="text-center">Galeria</h2>
		<!--
		<div class="slider-for">
			<div>{{ HTML::image('img/commercial.jpg') }}<h4>Pizza</h4></div>
			<div>{{ HTML::image('img/corporate.jpg') }}</div>
			<div>{{ HTML::image('img/enthusiast.jpg') }}</div>	
			<div>{{ HTML::image('img/private.jpg') }}</div>	
			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/VZXJLQntCP0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/64FrYGRrKVY" frameborder="0" allowfullscreen></iframe>
			</div>
			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/eVTXPUF4Oz4" frameborder="0" allowfullscreen></iframe>
			</div>
			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/R40wAZxMsTg" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		
		<div class="slider-nav">
			<div>{{ HTML::image('img/commercial.jpg') }}</div>
			<div>{{ HTML::image('img/corporate.jpg') }}</div>
			<div>{{ HTML::image('img/enthusiast.jpg') }}</div>	
			<div>{{ HTML::image('img/private.jpg') }}</div>	
			<div>{{ HTML::image('http://img.youtube.com/vi/VZXJLQntCP0/1.jpg') }}</div>
			<div>{{ HTML::image('http://img.youtube.com/vi/64FrYGRrKVY/1.jpg') }}</div>
			<div>{{ HTML::image('http://img.youtube.com/vi/eVTXPUF4Oz4/1.jpg') }}</div>	
			<div>{{ HTML::image('http://img.youtube.com/vi/R40wAZxMsTg/1.jpg') }}</div>	
		</div>
		-->
	</div>

	<div id="contact">
		
		<h2 class="text-center">Contactenos</h2>
		
		<div class="col-xs-6">
			<a class="twitter-timeline" href="https://twitter.com/Aftapilot" data-widget-id="626862459786252288">Tweets por el @Aftapilot.</a>
            <script>
            	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>    
		</div>

		<div class="col-xs-6 well bs-component well-material-light-blue-900">
			{{ Form::open(array('url' => '')) }}
				<fieldset>
					<legend class="text-center" style="color:white; font-weight:bold">Coméntanos</legend>
					<div class="form-group">
						{{ Form::label('name','Nombre y Apellido') }}
						{{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'your name', 'autocomplete'=>'off')) }}
					</div>
					<div class="form-group">
						{{ Form::label('name','Correo') }}
						{{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'your email', 'autocomplete'=>'off')) }}
					</div>
					<div class="form-group">
						{{ Form::label('name','Asunto') }}
						{{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'subject', 'autocomplete'=>'off')) }}
					</div>
					<div class="form-group">
						{{ Form::label('name','Mensaje') }}
						{{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'message', 'autocomplete'=>'off','style'=>'height:94px')) }}
					</div>
					{{ Form::submit('Guardar',array('class'=>'btn btn-info pull-right', 'id'=>'send'))}}
				</fieldset>
			{{ Form::close() }}
		</div>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.799350933296!2d-80.3075338!3d25.908965799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a5324baa0f8b%3A0xef081bc8f1549ff9!2s6625+Miami+Lakes+Dr+%23374%2C+Miami+Lakes%2C+FL+33014%2C+EE.+UU.!5e0!3m2!1ses-419!2sve!4v1438291578322" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
		</iframe>

	</div>

</div>

@stop