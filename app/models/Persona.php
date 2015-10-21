<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Persona extends Eloquent {

	protected $table = 'personas';
	protected $fillable = ['personas'];

	public static $errors;

	public static function isValid($data, $rules)
		{
			$validation = Validator::make($data, $rules);
			if ($validation->passes()) return true;
				static::$errors = $validation->messages();
			return false;
		}
}
