<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => '2022-03-30 06:23:00',
                'updated_at' => '2022-03-30 06:23:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'System-Admin',
                'guard_name' => 'web',
                'created_at' => '2022-03-30 05:45:00',
                'updated_at' => '2022-03-30 05:45:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'customer-care',
                'guard_name' => 'web',
                'created_at' => '2022-08-03 10:16:10',
                'updated_at' => '2022-08-03 10:16:10',
            ),
        ));
        
        
    }
}