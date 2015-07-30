<?php

class HomeController extends BaseController {

	public function showHome()
	{
		$lang  = Lang::getLocale();
		$title = 'Afta FlightSchool';
		return View::make('home')
		->with('title',$title)
		->with('lang',$lang);
	}

	public function language($lang) {
		Session::set('language',$lang);
		return Redirect::to('home');
	}

}
