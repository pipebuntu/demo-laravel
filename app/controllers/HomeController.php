<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function start()
	{
		return View::make('start');
	}

	public function login()
	{	
		
		if (Auth::attempt(array('name'=>Input::get('name'), 'password'=>Input::get('pwd')))) {
		    return View::make('hello');
		} else {
		    return "Error al iniciar sesion";
		}
	}

	public function logout()
	{
		Auth::logout();
    	return Redirect::to('/');
	}

}
