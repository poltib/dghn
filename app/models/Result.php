<?php

class Result extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'date' => 'required',
		'result' => 'required'
	);
}
