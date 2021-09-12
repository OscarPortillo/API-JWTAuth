<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['Cristina', "Isabella", "Yana", "Gonzalo", "Patricia", "Oscar", "María"];
        for($i = 0; $i < count($users); $i++) {
            DB::table('users')->insert([
                'name' => $users[$i],
                'email' => $users[$i].'@gmail.com',
                'password' => Hash::make('secret')
            ]);
        }
    }
}
