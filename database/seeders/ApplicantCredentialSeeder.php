<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicantCredential;

class ApplicantCredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantCredential::factory(100)->create();
    }
}
