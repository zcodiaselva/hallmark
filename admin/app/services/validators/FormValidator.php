<?php namespace App\Services\Validators;

class FormValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'pdf'  => 'required_without:id|mimes:pdf|max:2048',
		'order'  => 'required|numeric',
	);

	public static $messages = array(
    	'pdf.required_without' => 'The :attribute field is required.',
	);

}