<?php

class SectionsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sections')->delete();

        Section::create([
            'name' => 'Natation',
            'description' => 'Une école de natation à partir de 3 ans accomplis</br>
Un groupe pré-compétition</br>
Un groupe compétition</br>
Une école de natation pour adultes - Masters</br>' 
        ]);

        Section::create([
            'name' => 'Aquagym',
            'description' => 'Gymnastique aquatique' 
        ]);
	}

}
