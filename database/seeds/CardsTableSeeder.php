<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'card_type_id' => 1,
                'currency_id' => 1,
                'available_balance' => 5.0,
                'ledger_balance' => 200.0,
                'name' => 'Pedro Pinduko',
                'number' => '4685881824504879',
                'month' => '02',
                'year' => '22',
                'cvv' => '506',
                'billing_address' => '19, Olubunmi Rotimi, Lekki, Lagos',
                'zip_code' => '23401',
                'created_at' => '2022-03-30 12:16:11',
                'updated_at' => '2022-07-23 12:16:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}