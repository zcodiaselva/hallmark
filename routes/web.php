<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('producer/logout',  array('as' => 'producer.logout',      'uses' => 'Producer\AuthController@getLogout'));
Route::get('producer/login',  array('as' => 'producer.login',      'uses' => 'Producer\AuthController@getLogin'));
Route::post('producer/login',  array('as' => 'producer.login.post',  'uses' => 'Producer\AuthController@postLogin'));

Route::group(array('prefix' => 'producer' , 'before' => 'sentry'), function()
{
    Route::resource('/', 'Producer\ProducerController');
});

//Route::get('index/agency',  array('as' => 'agency.license',  'uses' => 'HomeController@getNewAgency'));
//Route::post('index/agency',  array('as' => 'agencyform.submit.post',  'uses' => 'HomeController@getNewAgencySubmit'));
//Route::get('index/contact-us',  array('as' => 'contact.index',  'uses' => 'HomeController@getOurTeam'));
//Route::post('index/contact-us',  array('as' => 'contactform.submit.post',  'uses' => 'HomeController@postContactUs'));

Route::get('/{slug}', 'HomeController@showMainMenu');

Route::get('/{slug_en}/{slug}', 'HomeController@showSubMenu');

Route::get('/new-agency',  array('as' => 'agency.license',  'uses' => 'HomeController@getNewAgency'));
Route::post('/new-agency',  array('as' => 'agencyform.submit.post',  'uses' => 'HomeController@getNewAgencySubmit'));
//Route::get('/contact-us',  array('as' => 'contact.index',  'uses' => 'HomeController@getOurTeam'));
Route::post('/contact-us',  array('as' => 'contactform.submit.post',  'uses' => 'HomeController@postContactUs'));

Route::resource('/', 'HomeController');
