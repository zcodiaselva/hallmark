<?php namespace App\Services\Validators;

class ProducerValidator extends Validator {

	public static $rules = array(
		'first_name' => 'required|max:255',
		'last_name' => 'max:255',
		'username'  => 'required|min:5|max:50|unique:users,username',
		'email'  => 'email|max:255',
		'password'  => 'required_without:id|min:6',
		'password_confirmation'  => 'required_without:id',
	);

	public static $messages = array(
		'password.required_without' => 'The :attribute field is required.',
		'password_confirmation.required_without' => 'The :attribute field is required.',
	);

}