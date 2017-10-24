<?php 
namespace App\Services\Validators;

class BecomeProducerFormValidator extends Validator {

	public static $rules = array(
		'name_of_agency' => 'required|max:255',
		'date' => 'required|max:20',
		'mailing_address' => 'required|max:255',
		'mailing_address_state' => 'required|max:40',
		'mailing_address_zip_code' => 'required|max:10',
		'physical_address' => 'required|max:255',
		'physical_address_state' => 'required|max:40',
		'physical_address_zip_code' => 'required|max:10',
		'organization_type' => 'required',
		'year_in_business' => 'required|max:30'
	);

	public static $messages = array();

}