<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Henry';
        $user->email = 'henry@gmail.com';
        $user->password = '$2y$10$E3OjImMSjPTG6J4SLgFWte1wyH7lZwEtfPiahDdT2LyZG/RjqTWuq'; #ekonom4r
        $user->role_id = 1; #root
        $user->isvalid = '1';
        $user->save();

        $user = new User();
        $user->name = 'Henry David';
        $user->email = 'henrydavid@gmail.com';
        $user->password = '$2y$10$E3OjImMSjPTG6J4SLgFWte1wyH7lZwEtfPiahDdT2LyZG/RjqTWuq'; #ekonom4r
        $user->role_id = 2; #admin
        $user->isvalid = '1';
        $user->save();
    }
}
