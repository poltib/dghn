<?php

class Course extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'horraire' => 'required',
		'price' => 'required',
		'description' => 'required'
	);

    public function sections()
    {
        return $this->belongsTo('Section');
    }
}
