<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call([
            RoleTableSeeder::class,
            ProvinceTableSeeder::class,
            UserTableSeeder::class
        ]);
//      $this->call(CityTableSeeder::class);

        Model::reguard();
    }
}
