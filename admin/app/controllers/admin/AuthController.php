<?php namespace App\Controllers\Admin;
use Auth, BaseController, Form, Input, Redirect, View, Session;

class AuthController extends BaseController {

	/**
	 * Display the login page
	 * @return View
	 */
	public function getLogin()
	{
		return View::make('admin.auth.login');
	}

	/**
	 * Login action
	 * @return Redirect
	 */
	public function postLogin()
	{
		$credentials = array(
			'email'    => Input::get('email'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($credentials)){
			Session::flash('message', 'You are logged in!');
			return Redirect::intended('admin');
		}else{
			return Redirect::route('admin.login')
				->withErrors('Your username/password combination was incorrect')
				->withInput();
		}

	}


	/**
	 * Logout action
	 * @return Redirect
	 */
	public function getLogout()
	{
		Auth::logout();

		return Redirect::route('admin.login');
	}

}
