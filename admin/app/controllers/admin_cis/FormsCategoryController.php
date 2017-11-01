<?php 
namespace App\Controllers\Admin_cis;

use App\Models\FormCategory;
use App\Services\Validators\CategoryValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class FormsCategoryController extends BaseController {

	public function index()
	{
		return View::make('admin_aero.forms_category.index')
			->with('categories', FormCategory::with('editor')
			->where('site', 'aero')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_aero.forms_category.create');
	}

	public function store()
	{
		$validation = new CategoryValidator;

		if ($validation->passes())
		{
			$category = new FormCategory;
			$category->name   = Input::get('name');
			$category->site   = 'aero';
			$category->description    = Input::get('description');
			$category->order    = Input::get('order');
			$category->created_by = Auth::user()->id;
			$category->updated_by = Auth::user()->id;

			$category->save();

			Session::flash('message', 'New Category has been added.');

			return Redirect::route('aero-admin.forms-category.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_aero.forms_category.edit')->with('category', FormCategory::find($id));
	}

	public function update($id)
	{
		$validation = new CategoryValidator;

		if ($validation->passes())
		{
			$category = FormCategory::find($id);
			$category->name   = Input::get('name');
			$category->description    = Input::get('description');
			$category->order    = Input::get('order');
			$category->updated_by = Auth::user()->id;
			$category->save();

			Session::flash('message', 'The Category has been updated.');

			return Redirect::route('aero-admin.forms-category.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

}
