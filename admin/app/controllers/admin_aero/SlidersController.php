<?php 
namespace App\Controllers\Admin_aero;

use App\Models\Slider;
use App\Services\Validators\SliderValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class SlidersController extends BaseController {

	public function index()
	{
		return View::make('admin_aero.sliders.index')
			->with('sliders', Slider::with('editor')
			->where('site', 'aero')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin_aero.sliders.create');
	}

	public function store()
	{
		$validation = new SliderValidator;

		if ($validation->passes())
		{
			$slider = new Slider;
			$slider->title   = Input::get('title');
			$slider->site   = 'aero';
			$slider->alt    = Input::get('alt');
			$slider->order    = Input::get('order');
			$slider->created_by = Auth::user()->id;
			$slider->updated_by = Auth::user()->id;

			if (Input::hasFile('image'))
			{
				$file = Input::file('image');
				$file->move('uploads/aero/slider', $file->getClientOriginalName());
				$slider->image    = $file->getClientOriginalName();
			}

			$slider->save();

			Session::flash('message', 'The image has been added.');

			return Redirect::route('aero-admin.sliders.edit', $slider->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_aero.sliders.edit')->with('slider', Slider::find($id));
	}

	public function update($id)
	{
		$validation = new SliderValidator;

		if ($validation->passes())
		{
			$slider = Slider::find($id);
			$slider->title   = Input::get('title');
			$slider->alt    = Input::get('alt');
			$slider->order    = Input::get('order');
			$slider->updated_by = Auth::user()->id;

			if (Input::hasFile('image'))
			{
				$file = Input::file('image');
				$file->move('uploads/aero/slider', $file->getClientOriginalName());
				$slider->image    = $file->getClientOriginalName();
			}

			$slider->save();

			Session::flash('message', 'The Image has been updated.');

			return Redirect::route('aero-admin.sliders.edit', $slider->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$slider = Slider::find($id);
		$slider->delete();

		Session::flash('message', 'The image has been deleted.');

		return Redirect::back();
	}

}
