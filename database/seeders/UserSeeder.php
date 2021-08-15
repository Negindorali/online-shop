<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>'Negin',
            'role_id'=>1,
            'email'=>'vendraa.78@gmail.com',
            'password'=>bcrypt("2345234523")
        ]);
    }
}
