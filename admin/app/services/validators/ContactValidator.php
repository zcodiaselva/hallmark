<?php namespace App\Services\Validators;

class ContactValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'title' => 'max:255',
		'phone' => 'required|max:255',
		'email' => 'required|max:255',
		'order'  => 'numeric',
	);

	public static $messages = array();

}