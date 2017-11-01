<?php 
namespace App\Controllers\Admin_es;

use App\Models\Contact;
use App\Services\Validators\ContactValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class ContactsController extends BaseController {

	public function index()
	{
		return View::make('admin_es.contacts.index')
			->with('contacts', Contact::with('editor')
			->where('site', 'es')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_es.contacts.create');
	}

	public function store()
	{
		$validation = new ContactValidator;

		if ($validation->passes())
		{
			$contact = new Contact;
			$contact->name   = Input::get('name');
			$contact->title   = Input::get('title');
			$contact->site   = 'es';
			$contact->phone    = Input::get('phone');
			$contact->email    = Input::get('email');
			$contact->order    = Input::get('order');
			$contact->created_by = Auth::user()->id;
			$contact->updated_by = Auth::user()->id;

			$contact->save();

			Session::flash('message', 'New contact has been added.');

			return Redirect::route('es-admin.contacts.edit', $contact->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_es.contacts.edit')->with('contact', Contact::find($id));
	}

	public function update($id)
	{
		$validation = new ContactValidator;

		if ($validation->passes())
		{
			$contact = Contact::find($id);
			$contact->name   = Input::get('name');
			$contact->title   = Input::get('title');
			$contact->phone    = Input::get('phone');
			$contact->email    = Input::get('email');
			$contact->order    = Input::get('order');
			$contact->updated_by = Auth::user()->id;

			$contact->save();

			Session::flash('message', 'The contact has been updated.');

			return Redirect::route('es-admin.contacts.edit', $contact->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$contact = Contact::find($id);
		$contact->delete();

		Session::flash('message', 'The contact has been deleted.');

		return Redirect::back();
	}

}
