<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Flat;
use App\Models\House;
use App\Models\Tenant;
use App\Models\User;

class TenantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id' => House::factory(),
            'flat_id' => Flat::factory(),
            'user_id' => User::factory(),
        ];
    }
}
