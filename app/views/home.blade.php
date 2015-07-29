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
		<div class="col-xs-4">{{ Lang::get('text.pizza') }}</div>
		<div class="col-xs-4">{{ Lang::get('text.pizza') }}</div>
		<div class="col-xs-4">{{ Lang::get('text.pizza') }}</div>
	</div>

	<div id="programs">
		<h2>{{ Lang::get('text.pizza') }}</h2>
		<a class="enlace" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/1')}}" data-title="pizza" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>Private</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		<a class="enlace" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/2')}}" data-title="cachapa" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>Corporate</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		<a class="enlace" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/3')}}" data-title="" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>Commercial</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>
		<a class="enlace" data-toggle="modal" data-target="#myModal" data-route="{{ URL::to('progam/4')}}" data-title="" data-price="" data-info="">
			<div class="col-xs-6">
				<img src="img/social/usa.png">
				<h3>Enthusiast</h3>
				<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
			</div>
		</a>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
		
	</div>

	<div id="contact">
		
	</div>

</div>

@stop