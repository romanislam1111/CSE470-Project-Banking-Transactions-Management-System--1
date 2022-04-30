<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'US Dollars',
                'symbol' => '$',
                'created_at' => '2019-07-23 08:19:21',
                'updated_at' => '2019-07-23 08:19:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pound sterling',
                'symbol' => '£',
                'created_at' => '2019-07-23 08:19:21',
                'updated_at' => '2019-07-23 08:19:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ghana Cedis',
                'symbol' => 'GHS',
                'created_at' => '2019-07-23 08:19:21',
                'updated_at' => '2019-07-23 08:19:21',
            ),
        ));
        
        
    }
}