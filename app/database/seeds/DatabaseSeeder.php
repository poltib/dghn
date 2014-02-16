<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('AnnouncesTableSeeder');
		$this->call('ContactsTableSeeder');
		$this->call('SectionsTableSeeder');
		$this->call('CoursesTableSeeder');
		// $this->call('ResultsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}