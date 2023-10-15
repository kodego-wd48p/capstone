<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\JobLocation;

class JobLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobLocation::factory(100)->create();
    }
}
