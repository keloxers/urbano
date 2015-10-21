<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Track extends Eloquent {

	protected $table = 'tracks';
	protected $fillable = ['tracks'];

	public static $errors;

	public static function isValid($data, $rules)
		{
			$validation = Validator::make($data, $rules);
			if ($validation->passes()) return true;
				static::$errors = $validation->messages();
			return false;
		}
}
