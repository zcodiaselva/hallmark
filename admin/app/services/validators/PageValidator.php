<?php namespace App\Services\Validators;

class PageValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'image1'  => 'image|max:3000',
		'image2'  => 'image|max:3000',
		'image3'  => 'image|max:3000',
	);

	public static $messages = array();

}
