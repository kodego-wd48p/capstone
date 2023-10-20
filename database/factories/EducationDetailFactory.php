<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'certificate_name' => $this->faker->certificate_name(),
            'educational_level' => $this->faker->educational_level(),
            'school_name' => $this->faker->school_name(),
            'starting_date' => Carbon::today()->subDays(rand(0, 365)),
            'completion_date' => Carbon::today()->subDays(rand(0, 365)),
            
        ];
    }
}
