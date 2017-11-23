<?php namespace App\Services\Validators;

class StaffValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'designation'  => 'required|max:255',
		
	);

	public static $messages = array(
    	
	);

}