<?php namespace App\Services\Validators;

class CisPageValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'html_title_en'  => 'required|max:3000',
		'html_title_sp'  => 'required|max:3000',
		'page_heading_en'  => 'required|max:3000',
		'page_heading_sp'  => 'required|max:3000',

	);

	public static $messages = array();

}
