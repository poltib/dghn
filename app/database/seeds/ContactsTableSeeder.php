<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('contacts')->delete();

        Contact::create([
            'name' => 'DEVIL',
            'first_name' => 'Daniel',
            'phone' => '0495/82.58.32',
            'email' => 'daniel.devil@hotmail.com',
            'function' => 'Président'    
        ]);

        Contact::create([
            'name' => 'HOENS',
            'first_name' => 'Patricia',
            'phone' => '0495/54.14.38',
            'email' => 'patricia.hoens@teledisnet.be',
            'function' => 'Secrétaire Administratif'    
        ]);

        Contact::create([
            'name' => 'KOWALCZYK',
            'first_name' => 'Silvie',
            'phone' => '0474/31.95.92',
            'email' => 'ives.dietens@skynet.be',
            'function' => 'Directeur Sportif'    
        ]);

        Contact::create([
            'name' => 'BRASSEUR',
            'first_name' => 'Alain',
            'phone' => '0497/53.55.75',
            'email' => 'alain.brasseur@skynet.be',
            'function' => 'Secrétaire Sportif'    
        ]);

        Contact::create([
            'name' => 'GOFFIN',
            'first_name' => 'Christine',
            'phone' => '0476/65.36.69',
            'email' => 'christine.goffin@outlook.com',
            'function' => 'Trésorier'    
        ]);

        Contact::create([
            'name' => '',
            'first_name' => '',
            'phone' => '',
            'email' => 'thiry.t@gmail.com',
            'function' => 'Webmaster'    
        ]);
	}

}
