<?php

class Announce extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nom' => 'required',
		'annonce' => 'required'
	);
}
