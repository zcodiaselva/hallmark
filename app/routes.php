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
Route::get('producer/logout',  array('as' => 'producer.logout',      'uses' => 'App\Controllers\Producer\AuthController@getLogout'));
Route::get('producer/login',  array('as' => 'producer.login',      'uses' => 'App\Controllers\Producer\AuthController@getLogin'));
Route::post('producer/login',  array('as' => 'producer.login.post',  'uses' => 'App\Controllers\Producer\AuthController@postLogin'));

Route::group(array('prefix' => 'producer' , 'before' => 'sentry'), function()
{
    Route::controller('/', 'App\Controllers\Producer\ProducerController');
});

Route::get('/agency',  array('as' => 'agency.license',  'uses' => 'HomeController@getNewAgency'));
Route::post('/agency',  array('as' => 'agencyform.submit.post',  'uses' => 'HomeController@getNewAgencySubmit'));
//Route::get('/contact-us',  array('as' => 'contact.index',  'uses' => 'HomeController@getOurTeam'));
Route::post('/contact-us',  array('as' => 'contactform.submit.post',  'uses' => 'HomeController@postContactUs'));

Route::get('/{slug}', 'HomeController@showMainMenu'); //To Add the Dynamic Main Menus
Route::get('/{slug_en}/{slug}', 'HomeController@showSubMenu'); //To Add the Dynamic Sub Menus

Route::resource('/', 'HomeController@index');
	



