<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Str::random(20),
            'description' => $this->faker->paragraph(),
            'category_id' => JobCategory::all()->random()->id,
            'company_id' => Company::all()->random()->id,
            'type' => Str::random(20),
            'salary' => $this->faker->randomNumber(),
            'posting_date' => Carbon::today()->subDays(rand(0, 365)),
            'application_date' => Carbon::today()->subDays(rand(0, 365)),
            'no_of_vacancy' => rand(100,10000),
            'status'=> Str::random(20),
            'work_shift'=> Str::random(20),
            'job_location_id' => JobLocation::all()->random()->id,

        ];
    }
}
