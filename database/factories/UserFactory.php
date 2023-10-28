<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $num = array('080', '081', '070', '090', '091');
        return [
            'firstName' => $this->faker->firstname,
            'lastName' => $this->faker->lastname,
            'surName' => $this->faker->lastname,
            'phoneN0' => $num[array_rand($num, 1)] . $this->faker->numerify('########'),
            'email' => $this->faker->safeEmail,
            'password' => Hash::make('password@2022'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
