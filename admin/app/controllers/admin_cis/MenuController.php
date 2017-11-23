<?php 
namespace App\Controllers\Admin_cis;

use App\Models\Menu;
use App\Models\CisPage;
use App\Models\Category;
use App\Services\Validators\MenuValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class MenuController extends BaseController {

	public function index()
	{
		return View::make('admin_cis.menues.index')
			->with('menues', Menu::with('editor')
			->where('site', 'cis')
			->orderBy('order', 'asc')
			->paginate(15));
	}

	public function create()
	{      
        return \View::make('admin_cis.menues.create')
        	->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
			->with('menues', Menu::where('site', 'cis')->lists('name_en', 'id'))
			->with('pages', CisPage::where('site', 'cis')->lists('name', 'id'));
	}

	public function store()
	{
		$validation = new MenuValidator;

		if ($validation->passes())
		{
			$menu = new Menu;
			
			$menu->site   = 'cis';
			$menu->name_en = Input::get('name_en');
			$menu->name_sp = Input::get('name_sp');
			$menu->slug_en = Str::slug(Input::get('name_en'));
			$menu->slug_sp = Str::slug(Input::get('name_sp'));
			$menu->description = Input::get('description');
			$menu->parent_id = Input::get('parent_id');
			$menu->menu_type = Input::get('menu_type');
			$menu->link = Input::get('link');
			$menu->page_id = Input::get('page_id');
			$menu->category_id = Input::get('category_id');
			$menu->order = Input::get('order');			
			$menu->created_by = Auth::user()->id;
			$menu->updated_by = Auth::user()->id;

			$menu->save();

			Session::flash('message', 'New Menu has been added.');

			return Redirect::route('cis-admin.menu.edit', $menu->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin_cis.menues.edit')
				->with('menu', Menu::find($id))
				->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
				->with('menues', Menu::where('site', 'cis')->lists('name_en', 'id'))
				->with('pages', CisPage::where('site', 'cis')->lists('name', 'id'));
	}

	public function update($id)
	{
		$validation = new MenuValidator;

		if ($validation->passes())
		{
			$menu = menu::find($id);
			$menu->name_en = Input::get('name_en');
			$menu->name_sp = Input::get('name_sp');
			$menu->slug_en = Str::slug(Input::get('name_en'));
			$menu->slug_sp = Str::slug(Input::get('name_sp'));
			$menu->description = Input::get('description');
			$menu->category_id = Input::get('category_id');
			$menu->parent_id = Input::get('parent_id');
			$menu->menu_type = Input::get('menu_type');
			$menu->link = Input::get('link');
			$menu->page_id = Input::get('page_id');
			$menu->order = Input::get('order');		
			$menu->updated_by = Auth::user()->id;
			$menu->save();

			Session::flash('message', 'The Menu has been updated.');

			return Redirect::route('cis-admin.menu.edit', $menu->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}


	public function destroy($id)
	{
		$menu = menu::find($id);
		$menu->delete();

		Session::flash('message', 'The Menu has been deleted.');

		return Redirect::back();
	}

}
