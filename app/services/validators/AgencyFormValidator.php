<?php namespace App\Services\Validators;

class AgencyFormValidator extends Validator {

	public static $rules = array(
		// 'agency_name' => 'required|max:100',
		// 'contact_name' => 'required|max:100',
		// 'mailing_address'  => 'required|max:255',
		// 'state'  => 'required|max:50',
		// 'zip_code'  => 'required|max:50',
		// 'email' => 'email',
		'recaptcha_response_field' => 'required|recaptcha'
	);

	public static $messages = array();	

}