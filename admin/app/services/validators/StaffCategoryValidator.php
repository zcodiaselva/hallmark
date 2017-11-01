<?php 
namespace App\Services\Validators;

class StaffCategoryValidator extends Validator {

	public static $rules = array(
		'title' => 'required|max:255',
		
	);

	public static $messages = array();

}