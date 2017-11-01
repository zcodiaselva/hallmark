<?php 
namespace App\Controllers\Admin_cis;

use App\Models\Industry;
use App\Services\Validators\IndustryValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class IndustryController extends BaseController {

	public function index()
	{
		return View::make('admin_cis.industry.index')
			->with('industry', Industry::with('editor')
			->where('site', 'cis')
			->orderBy('order', 'asc')
			->paginate(15));
                
                
	}

	public function create()
	{      
        return \View::make('admin_cis.industry.create')
 			->with('industry', Industry::where('site', 'cis')->lists('name', 'id'));
	}

	public function store()
	{
		$validation = new IndustryValidator;

		if ($validation->passes())
		{
			$industry = new Industry;
			
			$industry->site         = 'cis';
			$industry->name         = Input::get('name');
                        $industry->sub_classes  = Input::get('sub_classes');
			//$industry->parent_id    = Input::get('parent_id');
			$industry->order        = Input::get('order');			
			$industry->created_by   = Auth::user()->id;
			$industry->updated_by   = Auth::user()->id;

			$industry->save();

			Session::flash('message', 'New Industry has been added.');

			return Redirect::route('cis-admin.industry.edit', $industry->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_cis.industry.edit')
				->with('industry', Industry::find($id))
                		->with('industries', Industry::where('site', 'cis')->lists('name', 'id'));
	}

	public function update($id)
	{
		$validation = new IndustryValidator;

		if ($validation->passes())
		{
			$industry = industry::find($id);
			$industry->name = Input::get('name');
                        $industry->sub_classes  = Input::get('sub_classes');
			//$industry->parent_id = Input::get('parent_id');
			$industry->order = Input::get('order');		
			$industry->updated_by = Auth::user()->id;
			$industry->save();

			Session::flash('message', 'The Indusry has been updated.');

			return Redirect::route('cis-admin.industry.edit', $industry->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}


	public function destroy($id)
	{
	    $industry = industry::find($id);
            $industry->delete();

            Session::flash('message', 'The Industry has been deleted.');

            return Redirect::back();
	}

}
