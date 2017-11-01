<?php namespace App\Controllers\Admin;

use App\Models\AdminUser;
use App\Services\Validators\AdminValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View, Hash;

class AdminsController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('admin');
    }

	public function index()
	{
		return View::make('admin.admins.index')
			->with('admins', AdminUser::with('editor')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin.admins.create');
	}

	public function store()
	{
		$validation = new adminValidator;

		if ($validation->passes())
		{
			$admin = new AdminUser;
			$admin->first_name   = Input::get('first_name');
			$admin->last_name   = Input::get('last_name');
			$admin->role   = Input::get('role');
			$admin->email   = Input::get('email');
			$admin->password   = Hash::make(Input::get('password'));
			$admin->created_by = Auth::user()->id;
			$admin->updated_by = Auth::user()->id;
			$admin->save();

			Session::flash('message', 'The user has been added.');

			return Redirect::route('admin.admins.edit', $admin->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin.admins.edit')->with('admin', AdminUser::find($id));
	}

	public function update($id)
	{
		
		$validation = new AdminValidator;
		AdminValidator::$rules['email'] = 'required|email|unique:admins,email,'.$id;

		if ($validation->passes())
		{
			$admin = AdminUser::find($id);
			$admin->first_name   = Input::get('first_name');
			$admin->last_name   = Input::get('last_name');
			$admin->role   = Input::get('role');
			$admin->email   = Input::get('email');
			$admin->created_by = Auth::user()->id;
			$admin->updated_by = Auth::user()->id;

			if (Input::has('password'))
			{
				$admin->password   = Hash::make(Input::get('password'));
			}

			$admin->save();

			Session::flash('message', 'The user has been updated.');

			return Redirect::route('admin.admins.edit', $admin->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$admin = AdminUser::find($id);
		$admin->delete();

		Session::flash('message', 'The user has been deleted.');

		return Redirect::route('admin.admins.index');
	}

}
