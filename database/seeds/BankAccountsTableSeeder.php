<?php

use Illuminate\Database\Seeder;

class BankAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_accounts')->delete();
        
        \DB::table('bank_accounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Princely Cezar',
                'number' => 'BDO00112231',
                'available_balance' => -195.0,
                'ledger_balance' => 1100.0,
                'user_id' => 1,
                'bank_id' => 1,
                'bank_location_id' => 1,
                'created_at' => '2022-07-23 08:19:21',
                'updated_at' => '2022-08-04 10:10:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Caren Bautista',
                'number' => 'BDO00112232',
                'available_balance' => 5.0,
                'ledger_balance' => 1340.0,
                'user_id' => 1,
                'bank_id' => 2,
                'bank_location_id' => 2,
                'created_at' => '2022-07-23 08:19:21',
                'updated_at' => '2022-08-05 22:21:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Grace Patulada',
                'number' => 'BDO00112233',
                'available_balance' => 500000.0,
                'ledger_balance' => 4000000.0,
                'user_id' => 1,
                'bank_id' => 1,
                'bank_location_id' => 1,
                'created_at' => '2022-08-05 20:59:26',
                'updated_at' => '2022-08-05 22:21:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}