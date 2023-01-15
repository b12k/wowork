<?php

namespace Database\Factories;

use App\Helpers\Sid;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sid' => Sid::generate(),
            'name' => $this->faker->unique()->company(),
            'email' => $this->faker->unique()->companyEmail(),
            'password' => bcrypt('secret'),
            'legal_name' => $this->faker->unique()->company().' '.$this->faker->companySuffix(),
            'legal_address' => rand(0, 1) ? $this->faker->address() : null,
            'legal_contact' => rand(0, 1) ? $this->faker->name() : null,
            'logo' => rand(0, 1) ? $this->faker->imageUrl() : null,
            'phone' => rand(0, 1) ? $this->faker->unique()->e164PhoneNumber() : null,
            'website' => rand(0, 1) ? $this->faker->unique()->url() : null,
            'type' => fake()->randomElement(['service', 'product', 'recruit']),
            'size' => fake()->randomElement(['xs', 'sm', 'md', 'lg', 'xl']),
            'email_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
            'legal_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
            'phone_verified_at' => rand(0, 1) ? $this->faker->dateTimeThisYear() : null,
        ];
    }
}
