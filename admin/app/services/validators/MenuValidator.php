<?php 
namespace App\Services\Validators;

class MenuValidator extends Validator {

	public static $rules = array(
		'name_en' => 'required|max:100',
		'name_sp' => 'required|max:100',		
		'order'  => 'required|numeric',
	);

	public static $messages = array();

}