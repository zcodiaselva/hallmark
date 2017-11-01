<?php 
namespace App\Services\Validators;

class CategoryValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'order'  => 'required|numeric',
	);

	public static $messages = array();

}