<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Staff::truncate();
        $num = array('080', '081', '070', '090', '091');
        return [
            'firstName' => $this->faker->word,
            'lastName' => $this->faker->word,
            'phoneN0' => $num[array_rand($num, 1)] . $this->faker->numerify('########'),
            'email' => $this->faker->safeEmail,
            'username' => $this->faker->userName,
            'password' => Hash::make('password@2022'),
        ];
    }
}
