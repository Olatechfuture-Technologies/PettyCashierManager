<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Flat;
use App\Models\House;

class FlatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'flatN0' => $this->faker->word,
            'house_id' => House::factory(),
            'floorName' => $this->faker->word,
            'noOfPersons' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
