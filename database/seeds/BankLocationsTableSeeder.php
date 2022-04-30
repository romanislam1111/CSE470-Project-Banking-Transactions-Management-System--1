<?php

use Illuminate\Database\Seeder;

class BankLocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_locations')->delete();
        
        \DB::table('bank_locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Philippines',
                'bank_id' => 1,
                'currency_id' => 2,
                'created_at' => '2022-03-23 08:03:21',
                'updated_at' => '2022-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'New York',
                'bank_id' => 2,
                'currency_id' => 1,
                'created_at' => '2022-03-23 08:03:21',
                'updated_at' => '2022-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Netherlands',
                'bank_id' => 1,
                'currency_id' => 2,
                'created_at' => '2022-03-23 08:03:21',
                'updated_at' => '2022-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}