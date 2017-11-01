<?php 
namespace App\Controllers\Admin_es;

use App\Models\Link;
use App\Services\Validators\LinkValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class LinksController extends BaseController {

	public function index()
	{
		return View::make('admin_es.links.index')
			->with('links', Link::with('editor')
			->where('site', 'es')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_es.links.create');
	}

	public function store()
	{
		$validation = new LinkValidator;

		if ($validation->passes())
		{
			$link = new Link;
			$link->title   = Input::get('title');
			$link->site   = 'es';
			$link->link    = Input::get('link');
			$link->order    = Input::get('order');
			$link->description    = Input::get('description');
			$link->created_by = Auth::user()->id;
			$link->updated_by = Auth::user()->id;

			$link->save();

			Session::flash('message', 'New link has been added.');

			return Redirect::route('es-admin.links.edit', $link->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_es.links.edit')->with('link', Link::find($id));
	}

	public function update($id)
	{
		$validation = new LinkValidator;

		if ($validation->passes())
		{
			$link = link::find($id);
			$link->title   = Input::get('title');
			$link->link    = Input::get('link');
			$link->order    = Input::get('order');
			$link->description    = Input::get('description');
			$link->updated_by = Auth::user()->id;

			$link->save();

			Session::flash('message', 'The Link has been updated.');

			return Redirect::route('es-admin.links.edit', $link->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$link = Link::find($id);
		$link->delete();

		Session::flash('message', 'The Link has been deleted.');

		return Redirect::back();
	}

}