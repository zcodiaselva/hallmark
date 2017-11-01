<?php 
namespace App\Controllers\Admin_aero;

use App\Models\Category;
use App\Services\Validators\CategoryValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class CategoryController extends BaseController {

	public function index()
	{
		return View::make('admin_aero.category.index')
			->with('categories', Category::with('editor')
			->where('site', 'aero')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_aero.category.create');
	}

	public function store()
	{
		$validation = new CategoryValidator;

		if ($validation->passes())
		{
			$category = new Category;
			$category->name   = Input::get('name');
			$category->site   = 'aero';
			$category->description    = Input::get('description');
			$category->order    = Input::get('order');
			$category->slug    = Str::slug(Input::get('name'));
			$category->created_by = Auth::user()->id;
			$category->updated_by = Auth::user()->id;

			$category->save();

			Session::flash('message', 'New Category has been added.');

			return Redirect::route('aero-admin.category.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_aero.category.edit')->with('category', Category::find($id));
	}

	public function update($id)
	{
		$validation = new CategoryValidator;

		if ($validation->passes())
		{
			$category = category::find($id);
			$category->name   = Input::get('name');
			$category->description    = Input::get('description');
			$category->order    = Input::get('order');
			$category->slug    = Str::slug(Input::get('name'));
			$category->updated_by = Auth::user()->id;
			$category->save();

			Session::flash('message', 'The Category has been updated.');

			return Redirect::route('aero-admin.category.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

}
