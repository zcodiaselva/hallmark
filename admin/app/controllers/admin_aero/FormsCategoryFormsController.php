<?php 
namespace App\Controllers\Admin_aero;

use App\Models\Form;
use App\Models\FormCategory;
use App\Services\Validators\FormValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View, Response, URL;

class FormsCategoryFormsController extends BaseController {

	public function index($category_id)
	{
		return View::make('admin_aero.forms.index')
			->with('forms', Form::with('editor')
			->where('site', 'aero')
			->where('category_id', $category_id)
			->orderBy('order', 'asc')
			->paginate(15))
			->with('category', FormCategory::find($category_id));
	}

	public function create($category_id)
	{
		return View::make('admin_aero.forms.create')
			->with('category', FormCategory::find($category_id));
	}

	public function store($category_id)
	{
		$validation = new FormValidator;

		if ($validation->passes())
		{
			$form = new Form;
			$form->name   = Input::get('name');
			$form->site   = 'aero';
			$form->category_id   = $category_id;
			$form->number    = Input::get('number');
			$form->link    = Input::get('link');
			$form->description    = Input::get('description');
			$form->order    = Input::get('order');
			$form->created_by = Auth::user()->id;
			$form->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$file = Input::file('pdf');
				$file->move('uploads/aero/form', $file->getClientOriginalName());
				$form->pdf    = $file->getClientOriginalName();
			}

			$form->save();

			Session::flash('message', 'The form has been added.');

			return Redirect::route('aero-admin.forms-category.forms.edit', array($category_id, $form->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($category_id, $id)
	{
		return View::make('admin_aero.forms.edit')->with('form', Form::find($id))
			->with('category', FormCategory::find($category_id));
	}

	public function update($category_id, $id)
	{
		$validation = new FormValidator;

		if ($validation->passes())
		{
			$form = Form::find($id);
			$form->name   = Input::get('name');
			$form->number    = Input::get('number');
			$form->link    = Input::get('link');
			$form->description    = Input::get('description');
			$form->order    = Input::get('order');
			$form->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$file = Input::file('pdf');
				$file->move('uploads/aero/form', $file->getClientOriginalName());
				$form->pdf    = $file->getClientOriginalName();
			}

			$form->save();

			Session::flash('message', 'The form has been updated.');

			return Redirect::route('aero-admin.forms-category.forms.edit', array($category_id, $form->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($category_id, $id)
	{
		$form = Form::find($id);
		$form->delete();

		Session::flash('message', 'The form has been deleted.');

		return Redirect::back();
	}

	public function getDownload($id){
		//dd('uploads/aero/form/' .$form->pdf);
		return Response::download('uploads/aero/form/'. $id);
	}

}
