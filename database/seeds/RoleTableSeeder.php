<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_su = new Role();
        $role_su->nama = 'Root';
        $role_su->save();

        $role_admin = new Role();
        $role_admin->nama = 'Administrator';
        $role_admin->save();

        $role_user = new Role();
        $role_user->nama = 'User';
        $role_user->save();
    }
}
