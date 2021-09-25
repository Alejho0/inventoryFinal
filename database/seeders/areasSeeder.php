<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\areas;

class areasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        areas::Factory(5)->create();
    }
}
