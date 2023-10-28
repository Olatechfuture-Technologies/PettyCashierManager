<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Duty;
use App\Models\DutyPost;
use App\Models\Flat;
use App\Models\Staff;

class DutyPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DutyPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'duty_id' => Duty::factory(),
            'staff_id' => Staff::factory(),
            'flat_id' => Flat::factory(),
            'tenants' => $this->faker->randomElement(/** enum_attributes **/),
            'status' => $this->faker->word,
        ];
    }
}
