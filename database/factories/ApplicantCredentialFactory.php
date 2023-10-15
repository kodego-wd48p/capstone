<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Applicant;

class ApplicantCredentialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(20),
            'file_upload'=> Str::random(20),
            'applicant_id' => Applicant::all()->random()->id,
           
        ];
    }
}
