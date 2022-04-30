<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banks')->delete();
        
        \DB::table('banks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bank Sentral ng Pilipinas',
                'picture' => '',
                'code' => 'BSP',
                'created_at' => '2022-03-23 08:19:21',
                'updated_at' => '2022-03-23 08:19:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Banko De Oro',
                'picture' => '',
                'code' => 'BBALND',
                'created_at' => '2022-03-23 08:19:21',
                'updated_at' => '2022-03-23 08:19:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}