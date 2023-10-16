<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Applicant;
use App\Models\ApplicationDetail;
use App\Models\JobCategory;

class ApplicationDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application_id' => ApplicationDetail::all()->random()->id,
            'applicant_id' => Applicant::all()->random()->id,
            'job_id' => JobCategory::all()->random()->id,
            'application_status'=> Str::random(20),
        ];
    }
}
