<?php 
namespace App\Controllers\Producer;

use App\Models\Page;
use BaseController, Input, Redirect, Sentry;

class AuthController extends BaseController {

	public function __construct()
	{
		\View::share('products', Page::where('category_id', 8)->get());
	}

	public function getLogin()
	{
		return \View::make('site.producer.login.index')
			->with('page', Page::find(25));
	}

	public function postLogin()
	{

	    $credentials = array(
			'username'    => Input::get('username'),
			'password' => Input::get('password'),
			'site' => 'aero'
		);

		try
		{
			$user = Sentry::authenticate($credentials, false);

			if ($user)
			{				
				return Redirect::to('producer');				
			}
		}
		catch(\Exception $e)
		{
			return Redirect::back()->withErrors(array('login' => $e->getMessage()))->withInput();
		}

	}


	public function getLogout()
	{
		Sentry::logout();

		return Redirect::to('producer/login');
	}

}
