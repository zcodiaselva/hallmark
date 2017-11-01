<?php 
namespace App\Controllers\Admin_cis;

use App\Models\StaffCategory;
use App\Services\Validators\StaffCategoryValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class StaffCategoryController extends BaseController {

	public function index()
	{
		return View::make('admin_cis.staffcategory.index')
			->with('staffcategories', StaffCategory::with('editor')
			->where('site', 'cis')
			->orderBy('title', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_cis.staffcategory.create');
	}

	public function store()
	{
		$validation = new StaffCategoryValidator;

		if ($validation->passes())
		{
			$category = new StaffCategory;
			$category->title   = Input::get('title');
			$category->site   = 'cis';
			$category->slug    = Str::slug(Input::get('title'));
			$category->created_by = Auth::user()->id;
			$category->updated_by = Auth::user()->id;

			$category->save();

			Session::flash('message', 'New Staff Category has been added.');

			return Redirect::route('cis-admin.staffcategory.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_cis.staffcategory.edit')->with('staffcategory', StaffCategory::find($id));
	}

	public function update($id)
	{
		$validation = new StaffCategoryValidator;

		if ($validation->passes())
		{
			$category = staffcategory::find($id);
			$category->title   = Input::get('title');
			
			$category->slug    = Str::slug(Input::get('title'));
			$category->updated_by = Auth::user()->id;
			$category->save();

			Session::flash('message', 'The Staff Category has been updated.');

			return Redirect::route('cis-admin.staffcategory.edit', $category->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

}
