<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobCategory::factory(100)->create();
    }
}
