<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert(
        [
            [
                'id' => 1,
                'title' => 'Breakefast',
                'slug' => 'warm',
                'type' => 'Food'
            ],
            [
                'id' => 2,
                'title' => 'Lunch',
                'slug' => 'warm',
                'type' => 'Food'
            ],
            [
                'id' => 3,
                'title' => 'Dinner',
                'slug' => 'warm',
                'type' => 'Food'
            ],
            [
                'id' => 4,
                'title' => 'Wine',
                'slug' => 'Alkoholic',
                'type' => 'Drinks'
            ],
        ]);
    }
}
