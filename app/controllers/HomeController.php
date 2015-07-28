<?php

class HomeController extends BaseController {

	public function showHome()
	{
		$title = 'Afta FlightSchool';
		return View::make('home')
		->with('title',$title);
	}

}
