<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Applicant;
use App\Models\Job;


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
            'application_id' => Application::all()->random()->id,
            'applicant_id' => Applicant::all()->random()->id,
            'job_id' => Job::all()->random()->id,
            'application_status'=> Str::random(20),
        ];
    }
}
