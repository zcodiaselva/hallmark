<?php namespace App\Services\Validators;

class LinkValidator extends Validator {

	public static $rules = array(
		'title' => 'required|max:255',
		'order'  => 'numeric',
	);

	public static $messages = array();

}