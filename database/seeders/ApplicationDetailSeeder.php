<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\ApplicationDetail;

class ApplicationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationDetail::factory(100)->create();
    }
}
