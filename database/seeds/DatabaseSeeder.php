<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(BankLocationsTableSeeder::class);
        $this->call(BankAccountsTableSeeder::class);
        
        $this->call(BankTransactionsTableSeeder::class);
        $this->call(CardTypesTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        
        
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
