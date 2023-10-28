<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Admin::truncate();
        $num = array('080', '081', '070', '090', '091');
        return [
            'firstName' => $this->faker->word,
            'lastName' => $this->faker->word,
            'phoneN0' => $num[array_rand($num, 1)] . $this->faker->numerify('########'),
            'email' => $this->faker->safeEmail,
            'password' => Hash::make('password@2022'),
        ];
    }
}
