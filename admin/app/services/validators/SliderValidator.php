<?php namespace App\Services\Validators;

class SliderValidator extends Validator {

	public static $rules = array(
		'title' => 'required|max:255',
		'image'  => 'required_without:id|image|max:3000',
		'order'  => 'numeric',
	);

	public static $messages = array(
    	'image.required_without' => 'The :attribute field is required.',
	);

}