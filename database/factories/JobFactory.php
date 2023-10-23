<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => User::all()->random()->id,
            'job_type_id' => JobType::all()->random()->id,
            'company_id' => Company::all()->random()->id,
            'is_company_name_hidden' => $this->faker->name(),
            'created_at' => Carbon::today()->subDays(rand(0, 365)),
            'job_location_id' => JobLocation::all()->random()->id,
            'description' => $this->faker->paragraph(),
            'is_active' => $this->faker->paragraph(),
            'apply_link' => $this->faker->paragraph()
        ];
    }
}
