<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\JobInformation;

class JobInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobInformation::factory(100)->create();
    }
}
