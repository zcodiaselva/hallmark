<?php 
namespace App\Controllers\Admin_cis;

use App\Models\Staff;
use App\Models\StaffCategory;
use App\Services\Validators\StaffValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class StaffController extends BaseController {

	public function index()
	{
		$category_id = 0;
		
		return \View::make('admin_cis.staff.index')
			->with('category_options', StaffCategory::where('site', 'cis')->lists('title', 'id'))
			->with('category', $category_id)
			->with('staff', Staff::with('editor', 'category')
			->where('site', 'cis')
			->orderBy('name', 'asc')
			->paginate(15));
	}


	/*public function postSearch()
	{
		$category_id = Input::get('category_id');
		
		if (Input::has('category_id')) {
			return \View::make('admin_cis.pages.index')
				->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
				->with('category_id', $category_id)
				->with('pages', CisPage::with('editor', 'category')				
				->where('category_id', $category_id)	
				->where('site', 'cis')
				->orderBy('category_id', 'asc')
				->paginate(15));
		}
	}*/


	/*public function getSearch()
	{
		$category_id = Input::get('category_id');
		
		if (Input::has('category_id')) {
			return \View::make('admin_cis.pages.index')
				->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
				->with('category_id', $category_id)
				->with('pages', CisPage::with('editor', 'category')				
				->where('category_id', $category_id)	
				->where('site', 'cis')
				->orderBy('category_id', 'asc')
				->paginate(15));
		}
	}*/

	
	public function create()
	{
		return \View::make('admin_cis.staff.create')
			->with('category_options', StaffCategory::where('site', 'cis')->lists('title', 'id'));
           
            
	}

	public function store()
	{
		$validation = new StaffValidator;

		if ($validation->passes())
		{
			$staff = new Staff;
			$staff->name 		= Input::get('name');
			$staff->site 		= 'cis';
			$staff->category 	= Input::get('category');			
			$staff->designation	= Input::get('designation');
			$staff->description	= Input::get('description');
			
			$staff->created_by 	= Auth::user()->id;
			$staff->updated_by 	= Auth::user()->id;
                        
                        
			$staff->save();

			Session::flash('message', 'The staff was saved');

			return Redirect::route('cis-admin.staff.index');
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
            return \View::make('admin_cis.staff.edit')
				->with('staff', Staff::with('category')->find($id))
				->with('category_options', StaffCategory::where('site', 'cis')->lists('title', 'id'));
	  
	}

	public function update($id)
	{
		$validation = new StaffValidator;


		if ($validation->passes())
		{
			$staff = Staff::find($id);



			//$staff->name 		= Input::get('name');
			//$staff->site 		= 'cis';
			//$staff->category_id 	= Input::get('category_id');
			
			/*$page->slug_en	= Str::slug(Input::get('html_title_en'));
			$page->slug_sp	= Str::slug(Input::get('html_title_sp'));*/
			$staff->name 		= Input::get('name');
			$staff->site 		= 'cis';
			$staff->category 	= Input::get('category');			
			$staff->designation	= Input::get('designation');
			$staff->description	= Input::get('description');
			
			$staff->created_by 	= Auth::user()->id;
			$staff->updated_by 	= Auth::user()->id;
                        
			$staff->save();

			//$page->save();

			Session::flash('message', 'The Staff was saved');

			return Redirect::route('cis-admin.staff.edit', $staff->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}


	public function destroy($id)
	{
		$staff = Staff::find($id);
			
		$staff->delete();

                Session::flash('message', 'The Staff has been deleted.');
		
		
		return Redirect::back();
	}
        
  

}
