<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\House;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'houseNo' => $this->faker->word,
            'name' => $this->faker->name,
            'address' => $this->faker->word,
            'zipCode' => $this->faker->boolean,
            'suitNo' => $this->faker->word,
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
