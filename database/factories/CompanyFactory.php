<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\business;
use Carbon\Carbon;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => Str::random(20),
            'company_logo'=> Str::random(100), 
            'profile_description' => $this->faker->paragraph(), 
            'business_type_id' => business::all()->random()->id,
            'company_contact_number'=> rand(11111111111,99999999999),
            'establish_date' => Carbon::today()->subDays(rand(0, 365)),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => Str::random(20).'@com',

        
            
        ];
    }
}
