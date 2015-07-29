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
		<div class="col-xs-6">
			<img src="img/social/usa.png">
			<h3>Private</h3>
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div class="col-xs-6">
			<img src="img/social/usa.png">
			<h3>Corporate</h3>
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div class="col-xs-6">
			<img src="img/social/usa.png">
			<h3>Commercial</h3>
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
		<div class="col-xs-6">
			<img src="img/social/usa.png">
			<h3>Enthusiast</h3>
			<p>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO</p>
		</div>
	</div>

	<div id="gallery">
		
	</div>

	<div id="contact">
		
	</div>

</div>

@stop