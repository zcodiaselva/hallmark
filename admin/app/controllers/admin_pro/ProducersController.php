<?php 
namespace App\Controllers\Admin_pro;

use App\Models\Producer;
use App\Services\Validators\ProducerValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View, Sentry;

class ProducersController extends BaseController {

	public function index()
	{
		return View::make('admin_pro.producers.index')
			->with('producers', Producer::with('editor')
			->where('site', 'pro')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_pro.producers.create');
	}

	public function store()
	{
		$validation = new ProducerValidator;

		if ($validation->passes())
		{

			$user = Sentry::getUserProvider()->create(array(
		        'first_name'    => Input::get('first_name'),
		        'last_name'    => Input::get('last_name'),
		        'email'    => Input::get('email'),
		        'phone'    => Input::get('phone'),
		        'username'    => Input::get('username'),
		        'password'    => Input::get('password'),
		        'activated'    => Input::get('activated'),
		        'site'    => 'pro',
		        'created_by'    => Auth::user()->id,
		        'updated_by'    => Auth::user()->id
		    ));

			Session::flash('message', 'New producer has been added.');

			return Redirect::route('pro-admin.producers.edit', $user->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);

	}

	public function edit($id)
	{
		return View::make('admin_pro.producers.edit')->with('producer', Producer::find($id));
	}

	public function update($id)
	{
		$validation = new ProducerValidator;
		ProducerValidator::$rules['username'] = 'required|unique:users,username,'.$id;

		if ($validation->passes())
		{
			$user = Sentry::getUserProvider()->findById($id);

			$user->first_name    = Input::get('first_name');
			$user->last_name    = Input::get('last_name');
			$user->email    = Input::get('email');
			$user->phone    = Input::get('phone');
			$user->username    = Input::get('username');
			$user->activated    = Input::get('activated');
			$user->updated_by    = Auth::user()->id;

			if (Input::has('password'))
			{
				$user->password   = Input::get('password');
			}
			
			$user->save();

			Session::flash('message', 'The producer has been updated.');

			return Redirect::route('pro-admin.producers.edit', $user->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$producer = Producer::find($id);
		$producer->delete();

		Session::flash('message', 'The producer has been deleted.');

		return Redirect::back();
	}

}
