<?php 
namespace App\Controllers\Admin_aero;

use App\Models\Email;
use App\Services\Validators\EmailValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class EmailsController extends BaseController {

	public function index()
	{
		return View::make('admin_aero.emails.index')
			->with('emails', email::with('editor')
			->where('site', 'aero')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_aero.emails.create');
	}

	public function store()
	{
		$validation = new emailValidator;

		if ($validation->passes())
		{
			$email = new email;
			$email->title   = Input::get('title');
			$email->site   = 'aero';
			$email->email    = Input::get('email');
			$email->created_by = Auth::user()->id;
			$email->updated_by = Auth::user()->id;

			$email->save();

			Session::flash('message', 'New email address has been added.');

			return Redirect::route('aero-admin.emails.edit', $email->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_aero.emails.edit')->with('email', Email::find($id));
	}

	public function update($id)
	{
		$validation = new EmailValidator;

		if ($validation->passes())
		{
			$email = email::find($id);
			$email->title   = Input::get('title');
			$email->email    = Input::get('email');
			$email->updated_by = Auth::user()->id;

			$email->save();

			Session::flash('message', 'Email address has been updated.');

			return Redirect::route('aero-admin.emails.edit', $email->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$email = Email::find($id);
		$email->delete();

		Session::flash('message', 'The email has been deleted.');

		return Redirect::route('aero-admin.emails.index');
	}

}
