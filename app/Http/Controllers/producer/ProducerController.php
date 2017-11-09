<?php 

namespace App\Http\Controllers\Producer;

use App\Http\Controllers\BaseController;

use App\Models\Page;
use App\Models\Form;
use App\Models\FormCategory;
use App\Models\Contact;
use View, Redirect;

class ProducerController extends BaseController {

	public function getIndex()
	{
		return Redirect::to('producer/general-information');
	}

	public function getGeneralInformation()
	{
		return View::make('site.producer.information.index')
			->with('page', Page::find(35));
	}

	public function getForms()
	{
		return View::make('site.producer.forms.index')
			->with('page', Page::find(36))
			->with('applications', FormCategory::with('forms')->find(11))
			->with('claims', FormCategory::with('forms')->find(12))
			->with('aircraft', FormCategory::with('forms')->find(13))
			->with('airport', FormCategory::with('forms')->find(14))
			->with('notices', FormCategory::with('forms')->find(15));
	}

	public function getBulletins()
	{
		return View::make('site.producer.bulletins.index')
			->with('page', Page::find(37))
			->with('bulletins', Form::where('category_id', 16)->orderBy('order', 'asc')->get());
	}

	public function getPolicyLookUp()
	{
		return View::make('site.producer.policy_lookup.index')
			->with('page', Page::find(38));
	}

	public function getClaims()
	{
		return View::make('site.producer.claims.index')
			->with('page', Page::find(39));
	}
	
	public function getClaimsSummaries()
	{
		return View::make('site.producer.claims_summaries.index')
			->with('page', Page::find(48));
	}
	
	public function getStaffContactList()
	{
		return View::make('site.producer.staff.index')
			->with('page', Page::find(40))
			->with('form', Form::find(49))
			->with('contacts', Contact::where('site','aero')->orderBy('order','asc')->get());
	}

	public function getCarriersByState()
	{
		return View::make('site.producer.carriers_by_state.index')
			->with('page', Page::find(41))
			->with('form', Form::find(50));
	}

	public function getPastQuoteSubmissions()
	{
		return View::make('site.producer.past_quote.index')
			->with('page', Page::find(42));
	}

	public function getRenewalListings()
	{
		return View::make('site.producer.renewal_listings.index')
			->with('page', Page::find(43));
	}

	public function getCurrentAccounts()
	{
		return View::make('site.producer.current_accounts.index')
			->with('page', Page::find(44));
	}

	public function getAircraftQuoteSubmission()
	{
		return View::make('site.producer.aircraft_quote.index')
			->with('page', Page::find(45));
	}

}