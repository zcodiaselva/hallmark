<?php namespace App\Services\Validators;

class AdminValidator extends Validator {

	public static $rules = array(
		'first_name' => 'required|alpha|max:255',
		'last_name' => 'alpha|max:255',
		'role'  => 'required|in:admin,editor',
		'email'  => 'required|email|unique:admins,email',
		'password'  => 'required_without:id',
		'repeat_password'  => 'required_without:id|same:password',
	);

	public static $messages = array(
		'password.required_without' => 'The :attribute field is required.',
		'repeat_password.required_without' => 'The :attribute field is required.',
	);

}