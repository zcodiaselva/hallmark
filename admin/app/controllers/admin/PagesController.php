<?php 
namespace App\Controllers\Admin;

use App\Models\Page;
use App\Services\Validators\PageValidator;
use Input, Redirect, Str, Auth, Session, BaseController;

class PagesController extends BaseController {

	public function index()
	{
		return \View::make('admin.pages.index')
			->with('pages', Page::with('editor')
			->where('site', 'main')
			->paginate(15));
	}

	public function create()
	{
		return \View::make('admin.pages.create');
	}

	public function store()
	{
		$validation = new PageValidator;

		if ($validation->passes())
		{
			$page = new Page;
			$page->name 		= Input::get('name');
			$page->site 		= 'main';
			$page->has_image1	= Input::get('has_image1');
			$page->has_image2	= Input::get('has_image2');
			$page->has_image3	= Input::get('has_image3');
			$page->has_body 	= Input::get('has_body');
			$page->has_body2    = Input::get('has_body2');
			$page->created_by 	= Auth::user()->id;
			$page->updated_by 	= Auth::user()->id;
			$page->save();

			Session::flash('message', 'The page was saved');

			return Redirect::route('admin.pages.edit', $page->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return \View::make('admin.pages.edit')->with('page', Page::find($id));
	}

	public function update($id)
	{
		$validation = new PageValidator;

		if ($validation->passes())
		{
			$page = Page::find($id);
			$page->name   = Input::get('name');
			$page->page_heading   = Input::get('page_heading');
			$page->html_title   = Input::get('html_title');
			$page->meta_keywords   = Input::get('meta_keywords');
			$page->meta_description   = Input::get('meta_description');
			$page->slug    = Str::slug(Input::get('name'));
			$page->updated_by = Auth::user()->id;

			if (Auth::user()->role == 'admin')
			{
			    $page->body    = Input::get('temp_body');
			    $page->temp_body    = Input::get('temp_body');
			
			    $page->body2    = Input::get('temp_body2');
			    $page->temp_body2    = Input::get('temp_body2');
				
				$page->status = 'approved';	
			}
			else
			{
				
			    $page->temp_body    = Input::get('temp_body');
			
			    $page->temp_body2    = Input::get('temp_body2');
					
				$page->status = 'not approved';			
			}
			
			
			// Image upload
			if (Input::hasFile('image1'))
			{
				$file = Input::file('image1');
				$file->move('uploads/main/page', $file->getClientOriginalName());
				$page->image1    = $file->getClientOriginalName();
			}
			if (Input::hasFile('image2'))
			{
				$file = Input::file('image2');
				$file->move('uploads/main/page', $file->getClientOriginalName());
				$page->image2    = $file->getClientOriginalName();
			}
			if (Input::hasFile('image3'))
			{
				$file = Input::file('image3');
				$file->move('uploads/main/page', $file->getClientOriginalName());
				$page->image3    = $file->getClientOriginalName();
			}

			$page->save();

			Session::flash('message', 'The page was saved');

			return Redirect::route('admin.pages.edit', $page->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}


	public function destroy($id)
	{
		$page = Page::find($id);
		$page->status = 'approved';
		$page->body = $page->temp_body;
		$page->body2 = $page->temp_body2;
		$page->save();

		Session::flash('message', 'New changes have been published.');

		return Redirect::back();
	}

}
