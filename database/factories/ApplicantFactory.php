<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ApplicantFactory extends Factory
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
                'gender'=> Str::random(20),
                'contact_number'=> rand(11111111111,99999999999),
                'email' => Str::random(20).'@gmail.com',
                'professional_summary'=> Str::random(20),
                'educational_level'=> Str::random(20),
                'profile_image'=> Str::random(20),
                'username'=> Str::random(20),
                'password' => Hash::make('password'),
                'account_status'=> Str::random(20),
            
        ];
    }
}
