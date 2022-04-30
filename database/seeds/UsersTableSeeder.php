<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'picture' => '',
                'first_name' => 'Jude',
                'middle_name' => 'Reyes',
                'last_name' => 'Suares',
                'email' => 'jude@gmail.com',
                'alt_email' => 'jude@gmail.com',
                'username' => 'juday',
                'phone_number' => '09120118874',
                'email_verified_at' => NULL,
                'password' => bcrypt('iloveyou'),
                'country_id' => +63,
                'description' => NULL,
                'address' => 'Brgy. Suay, Himamaylan City',
                'remember_token' => 'Customer',
                'created_at' => '2022-03-30 19:43:36',
                'updated_at' => '2022-04-22 19:43:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'picture' => '',
                'first_name' => 'Juan',
                'middle_name' => NULL,
                'last_name' => 'Delacruz',
                'email' => 'admin@gmail.com',
                'alt_email' => 'admin@gmail.com',
                'username' => 'admin',
                'phone_number' => '09120118872',
                'email_verified_at' => NULL,
                'password' => bcrypt('iloveyou'),
                'country_id' => +63,
                'description' => 'System Admin Account',
                'address' => 'Brgy. Lapnes, Kabankalan City',
                'remember_token' => NULL,
                'created_at' => '2022-08-03 19:43:36',
                'updated_at' => '2022-08-03 19:43:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'picture' => '',
                'first_name' => 'Glenn',
                'middle_name' => NULL,
                'last_name' => 'Suelo',
                'email' => 'glenn@gmail.com',
                'alt_email' => 'alt_glenn@gmail.com',
                'username' => 'glenda',
                'phone_number' => '09120118832',
                'email_verified_at' => NULL,
                'password' => bcrypt('iloveyou'),
                'country_id' => +63,
                'description' => 'Customer Care Account',
                'address' => 'Brgy 2, Cauayan, Negros Occidental',
                'remember_token' => NULL,
                'created_at' => '2022-08-03 19:43:36',
                'updated_at' => '2022-08-03 19:43:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}