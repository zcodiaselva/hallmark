<?php 
namespace App\Controllers\Admin_cis;

use App\Models\CisPage;
use App\Models\CisPageMeta;
use App\Models\Template;
use App\Models\Category;
use App\Services\Validators\CisPageValidator;
use Input, Redirect, Str, Auth, Session, BaseController;

class PagesController extends BaseController {

	public function index()
	{
		$category_id = 0;
		
		return \View::make('admin_cis.pages.index')
			->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
			->with('category_id', $category_id)
			->with('pages', CisPage::with('editor', 'category')
			->where('site', 'cis')
			->orderBy('category_id', 'asc')
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


	public function getSearch()
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
	}

	
	public function create()
	{
		return \View::make('admin_cis.pages.create')
			->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
            ->with('template_options', Template::lists('name', 'id'))
            ->with('html_content_en', Template::get(array('en_layout'=>'en_layout','sp_layout'=>'sp_layout'))->first());
            
	}

	public function store()
	{
		$validation = new CisPageValidator;

		if ($validation->passes())
		{
			$page = new CisPage;
			$page->name 		= Input::get('name');
			$page->site 		= 'cis';
			$page->category_id 	= Input::get('category_id');			
			$page->slug_en	= Str::slug(Input::get('html_title_en'));
			$page->slug_sp	= Str::slug(Input::get('html_title_sp'));
			$page->html_title_en	= Input::get('html_title_en');
			$page->html_title_sp	= Input::get('html_title_sp');
			$page->page_heading_en	= Input::get('page_heading_en');
			$page->page_heading_sp 	= Input::get('page_heading_sp');
			$page->template_id    = Input::get('template_id');
			//$page->status    = Input::get('status');
			$page->status    = '1';
			$page->html_content_en    = Input::get('html_content_en');
			$page->html_content_sp    = Input::get('html_content_sp');
			$page->created_by 	= Auth::user()->id;
			$page->updated_by 	= Auth::user()->id;
                        
                        if (Input::hasFile('image1'))
			{
				$file = Input::file('image1');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image1    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image2'))
			{
				$file = Input::file('image2');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image2    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image3'))
			{
				$file = Input::file('image3');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image3    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image4'))
			{
				$file = Input::file('image4');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image4    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image5'))
			{
				$file = Input::file('image5');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image5    = $file->getClientOriginalName();
			}
			$page->save();

			Session::flash('message', 'The page was saved');

			return Redirect::route('cis-admin.pages.index');
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{

		if($id != 91) {
			return \View::make('admin_cis.pages.edit')
				->with('page', CisPage::with('category')->find($id))
				->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
	            ->with('template_options', Template::lists('name', 'id'));
	    } else {
			return \View::make('admin_cis.pages.edit')
				->with('page', CisPage::with('category')->find($id))
				->with('page_meta', CisPageMeta::where('page_id', $id)->get()->toArray())
				->with('category_options', Category::where('site', 'cis')->lists('name', 'id'))
	            ->with('template_options', Template::lists('name', 'id'));

	    }
	}

	public function update($id)
	{
		$validation = new CisPageValidator;

		if ($validation->passes())
		{
			$page = CisPage::find($id);



			$page->name 		= Input::get('name');
			$page->site 		= 'cis';
			$page->category_id 	= Input::get('category_id');
			
			/*$page->slug_en	= Str::slug(Input::get('html_title_en'));
			$page->slug_sp	= Str::slug(Input::get('html_title_sp'));*/
			$page->html_title_en	= Input::get('html_title_en');
			$page->html_title_sp	= Input::get('html_title_sp');
			$page->page_heading_en	= Input::get('page_heading_en');
			$page->page_heading_sp 	= Input::get('page_heading_sp');
			$page->template_id    = Input::get('template_id');
			//$page->status    = Input::get('status');
			$page->status    = '1';
			$page->html_content_en    = Input::get('html_content_en');
			$page->html_content_sp    = Input::get('html_content_sp');
			$page->updated_by 	= Auth::user()->id;
                        
                          if (Input::hasFile('image1'))
			{
				$file = Input::file('image1');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());				
				$page->image1    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image2'))
			{
				$file = Input::file('image2');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image2    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image3'))
			{
				$file = Input::file('image3');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image3    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image4'))
			{
				$file = Input::file('image4');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image4    = $file->getClientOriginalName();
			}
                         if (Input::hasFile('image5'))
			{
				$file = Input::file('image5');
				$file->move('uploads/cis/pages', $file->getClientOriginalName());
				$page->image5    = $file->getClientOriginalName();
			}
                        
			$page->save();

			//$page->save();

			Session::flash('message', 'The page was saved');

			return Redirect::route('cis-admin.pages.edit', $page->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}


	public function destroy($id)
	{
		$page = CisPage::find($id);
		if($page->static_page != 1)
		{	
			$page->delete();

			Session::flash('message', 'The Page has been deleted.');
		}
		else
		{
			Session::flash('message', 'Can\'t delete static pages.');
		}	

		return Redirect::back();
	}
        
    public function getLayout($id,$isEdit=null)
	{
		if($isEdit==true){

			echo CisPage::find($id);

		}else{

			echo Template::find($id);

		}
		
	}

	public function updatePageMeta() {

		$data = Input::all();

		$page_id = $data['page_id'];
		$meta_type = $data['meta_type'];
		$text_value = $data['text_value']!=''?$data['text_value']:Str::slug($data['text_en']);
		$text_en = $data['text_en'];
		$text_sp = $data['text_sp'];
		$status = $data['status'];

		$page_meta = CisPageMeta::where('page_id', $page_id)->where('meta_type', $meta_type)->where('text_value', $text_value)->first();

		if(empty($page_meta)) {
			$page_meta = new CisPageMeta;
		}

		$page_meta->page_id = $page_id;
		$page_meta->meta_type = $meta_type;
		$page_meta->text_value = $text_value;
		$page_meta->text_en = $text_en;
		$page_meta->text_sp = $text_sp;
		$page_meta->status = $status;

		$page_meta->save();

	}

	public function delPageMeta() {

		$data = Input::all();

		$page_id = $data['page_id'];
		$meta_type = $data['meta_type'];
		$text_value = $data['text_value'];

		$page_meta = CisPageMeta::where('page_id', $page_id)->where('meta_type', $meta_type)->where('text_value', $text_value)->first();

		if(!empty($page_meta)) {
			$page_meta->delete();
		}

	}

	public function uploadImagePageMeta() {
		
		$data = Input::all();

		$page_id = 91;
		$meta_type = $data['meta_type'];
		$text_value = Input::file('upload_img')->getClientOriginalName();

		$page_meta = CisPageMeta::where('page_id', $page_id)->where('meta_type', $meta_type)->first();

		if(empty($page_meta)) {
			$page_meta = new CisPageMeta;
		}

		$page_meta->page_id = $page_id;
		$page_meta->meta_type = $meta_type;
		$page_meta->text_value = $text_value;

		$page_meta->save();

		$save_dir = public_path().'/assets/images/halmark/marketing/';

		Input::file('upload_img')->move($save_dir, Input::file('upload_img')->getClientOriginalName() );

		Session::flash('message', 'The Image has been uploaded.');

		return Redirect::back();

	}

}
