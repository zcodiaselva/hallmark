<?php namespace App\Services\Validators;

class ContactFormValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:100',
		'title' => 'max:50',
		'company'  => 'required|max:255',
		'email'  => 'required|email|max:50',
		'phone'  => 'required|max:50',
		'address'  => 'max:255',
		'city'  => 'required|max:50',
		'state'  => 'required|max:50',
		'zip'  => 'required|max:50',
		'special_requests'  => 'max:500',
	);

	public static $messages = array();

}