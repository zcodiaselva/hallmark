<?php namespace App\Controllers\Admin;

use App\Models\Page;
use View, BaseController;

class DashboardController extends BaseController {

	public function index()
	{
		return View::make('admin.dashboard.index')
			->with('approved_pages', Page::where('status', 'approved')->where('site', 'main')->orderBy('updated_at', 'desc')->take(4)->get())
			->with('not_approved_pages', Page::where('status', '!=', 'approved')->where('site', 'main')->orderBy('updated_at', 'desc')->take(4)->get());
	}

}
