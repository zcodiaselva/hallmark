<?php 
namespace App\Services\Validators;

class IndustryValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:100',
		
	);

	public static $messages = array();

}