<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function(){
//            $this->call(AccessLevelsSeeder::class);
//            $this->call(TenantSeeder::class);
//            $this->call(MasterfileSeeder::class);
//            $this->call(RoleTableSeeder::class);
//            $this->call(UserTableSeeder::class);
//            $this->call(AboutSeeder::class);
            $this->call(FarmQuotesSeeder::class);
            $this->call(RoutesTableSeeder::class);
        });

    }
}
