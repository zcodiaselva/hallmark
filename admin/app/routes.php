<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
    Route::resource('admins', 'App\Controllers\Admin\AdminsController');
    Route::resource('emails', 'App\Controllers\Admin\EmailsController');
});

Route::group(array('prefix' => 'es-admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin_es\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin_es\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin_es\PagesController');
    Route::resource('category', 'App\Controllers\Admin_es\CategoryController');
    Route::resource('links', 'App\Controllers\Admin_es\LinksController');
    Route::resource('contacts', 'App\Controllers\Admin_es\ContactsController');
    Route::resource('producers', 'App\Controllers\Admin_es\ProducersController');
    Route::resource('emails', 'App\Controllers\Admin_es\EmailsController');
    Route::resource('forms-category', 'App\Controllers\Admin_es\FormsCategoryController');
    Route::get('download-form/{id}', 'App\Controllers\Admin_es\FormsCategoryFormsController@getDownload');
    Route::resource('forms-category.forms', 'App\Controllers\Admin_es\FormsCategoryFormsController');
});

Route::group(array('prefix' => 'pro-admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin_pro\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin_pro\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin_pro\PagesController');
    Route::resource('category', 'App\Controllers\Admin_pro\CategoryController');
    Route::resource('links', 'App\Controllers\Admin_pro\LinksController');
    Route::resource('contacts', 'App\Controllers\Admin_pro\ContactsController');
    Route::resource('producers', 'App\Controllers\Admin_pro\ProducersController');
    Route::resource('emails', 'App\Controllers\Admin_pro\EmailsController');
    Route::resource('forms-category', 'App\Controllers\Admin_pro\FormsCategoryController');
    Route::get('download-form/{id}', 'App\Controllers\Admin_pro\FormsCategoryFormsController@getDownload');
    Route::resource('forms-category.forms', 'App\Controllers\Admin_pro\FormsCategoryFormsController');
});

Route::group(array('prefix' => 'aero-admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin_aero\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin_aero\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin_aero\PagesController');
    Route::resource('category', 'App\Controllers\Admin_aero\CategoryController');
    Route::resource('links', 'App\Controllers\Admin_aero\LinksController');
    Route::resource('contacts', 'App\Controllers\Admin_aero\ContactsController');
    Route::resource('producers', 'App\Controllers\Admin_aero\ProducersController');
    Route::resource('emails', 'App\Controllers\Admin_aero\EmailsController');
    Route::resource('forms-category', 'App\Controllers\Admin_aero\FormsCategoryController');
    Route::get('download-form/{id}', 'App\Controllers\Admin_aero\FormsCategoryFormsController@getDownload');
    Route::resource('forms-category.forms', 'App\Controllers\Admin_aero\FormsCategoryFormsController');
});

Route::group(array('prefix' => 'cis-admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin_cis\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin_cis\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin_cis\PagesController');
    Route::get('cis-admin/pages/search',  array('as' => 'cis-admin.pages.search',  'uses' => 'App\Controllers\Admin_cis\PagesController@getSearch'));
    Route::resource('menu', 'App\Controllers\Admin_cis\MenuController');
    Route::resource('category', 'App\Controllers\Admin_cis\CategoryController');
    Route::resource('staffcategory', 'App\Controllers\Admin_cis\StaffCategoryController');
    Route::resource('staff', 'App\Controllers\Admin_cis\StaffController');
    Route::resource('industry', 'App\Controllers\Admin_cis\IndustryController');
    Route::resource('links', 'App\Controllers\Admin_cis\LinksController');
    Route::resource('contacts', 'App\Controllers\Admin_cis\ContactsController');
    Route::resource('producers', 'App\Controllers\Admin_cis\ProducersController');
    Route::resource('emails', 'App\Controllers\Admin_cis\EmailsController');
    Route::resource('forms-category', 'App\Controllers\Admin_cis\FormsCategoryController');
    Route::get('download-form/{id}', 'App\Controllers\Admin_cis\FormsCategoryFormsController@getDownload');
    Route::resource('forms-category.forms', 'App\Controllers\Admin_cis\FormsCategoryFormsController');
});


/*
|--------------------------------------------------------------------------
| Main Site Routes
|--------------------------------------------------------------------------
|
*/

Route::controller('/', 'HomeController');
	



