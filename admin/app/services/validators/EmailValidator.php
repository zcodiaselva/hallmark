<?php namespace App\Services\Validators;

class EmailValidator extends Validator {

	public static $rules = array(
		'title' => 'required|max:255',
		'email'  => 'required|email|max:50'
	);

	public static $messages = array();

}