<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'sms_notification' => 1,
                'email_notification' => 1,
                'monthly_notification' => 0,
                'created_at' => '2022-03-30 02:25:35',
                'updated_at' => '2022-08-04 00:25:35',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'sms_notification' => 1,
                'email_notification' => 1,
                'monthly_notification' => 0,
                'created_at' => '2022-08-04 10:08:44',
                'updated_at' => '2022-08-04 10:08:44',
            ),
        ));
        
        
    }
}