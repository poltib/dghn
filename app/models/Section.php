<?php

class Section extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required'
	);

    public function courses()
    {
        return $this->hasMany( 'Course' );
    }
}
