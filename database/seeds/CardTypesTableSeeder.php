<?php

use Illuminate\Database\Seeder;

class CardTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_types')->delete();
        
        \DB::table('card_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mastercard',
                'picture' => 'https://www.mastercard.us/content/dam/mccom/global/logos/logo-mastercard-mobile.svg',
                'style' => 'bg-card-mastercard',
                'created_at' => '2022-03-30 13:16:19',
                'updated_at' => '2022-07-30 13:16:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'VISA',
                'picture' => 'https://i.pinimg.com/originals/55/a3/c2/55a3c2e6e01843e209cf2c2b279363b9.png',
                'style' => 'bg-card-visa',
                'created_at' => '2022-03-30 13:16:19',
                'updated_at' => '2022-07-23 13:16:19',
            ),
        ));
        
        
    }
}