<?php

class HomeController extends BaseController {

	public function showHome($lang)
	{
		$title = 'Afta FlightSchool';
		return View::make('home')
		->with('title',$title)
		->with('lang',$lang);
	}

}
