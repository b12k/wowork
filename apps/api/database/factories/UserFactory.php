<?php

namespace Database\Factories;

use App\Helpers\Sid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sid' => Sid::generate(),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'birthday' => $this->faker->dateTimeBetween(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['m', 'f', 'x']),
            'email_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
            'phone_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
            'identity_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'password' => Hash::make('secret'),
        ];
    }
}
