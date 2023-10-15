<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
// use App\Models\Job;

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
            'name' => Str::random(20),
            'address' => 'San '. Str::random(5).' City',
            'contact_number'=> rand(11111111111,99999999999),
            'email' => Str::random(20).'@gmail.com',
            'website' => Str::random(20).'@com',
            'username'=> Str::random(20),
            'password' => Hash::make('password'),
            'account_status'=> Str::random(20),
            'company_logo'=> Str::random(20),
        ];
    }
}
