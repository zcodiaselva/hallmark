<?php namespace App\Services\Validators;

abstract class Validator {

	/**
	 * Container for the data that needs to be validated
	 * @var array
	 */
	protected $data;

	/**
	 * Validation errors
	 * @var array
	 */
	public $errors;

	/**
	 * Validation rules
	 * @var array
	 */
	public static $rules;

	/**
	 * Validation messages
	 * @var array
	 */
	public static $messages;

	/**
	 * Initialize validator
	 * @param array $data
	 */
	public function __construct($data = null)
	{
		$this->data = $data ?: \Input::all();
	}

	/**
	 * Check if validation passes
	 * @return bool
	 */
	public function passes()
	{
		$validation = \Validator::make($this->data, static::$rules, static::$messages);

		if ($validation->passes()) return true;

		$this->errors = $validation->messages();

		return false;
	}

}
