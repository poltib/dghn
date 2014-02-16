<?php

class Contact extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'first_name' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'function' => 'required'
	);
}
