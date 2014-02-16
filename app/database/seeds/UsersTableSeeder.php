<?php 
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
                        'name' => 'admin',
                        'password' => Hash::make('admin')    
                        ]);
    }

}