<?php namespace App\Controllers\Admin_pro;

use App\Models\Page;
use View, BaseController;

class DashboardController extends BaseController {

	public function index()
	{
		return View::make('admin_pro.dashboard.index')
			->with('approved_pages', Page::with('category')->where('status', 'approved')->where('site', 'pro')->orderBy('updated_at', 'desc')->take(4)->get())
			->with('not_approved_pages', Page::with('category')->where('status', '!=', 'approved')->where('site', 'pro')->orderBy('updated_at', 'desc')->take(4)->get());
	}

}
