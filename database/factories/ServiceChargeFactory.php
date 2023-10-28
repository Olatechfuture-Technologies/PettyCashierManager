<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Models\House;
use App\Models\ServiceCharge;
use App\Models\Staff;
use App\Models\Tenant;

class ServiceChargeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceCharge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id' => House::factory(),
            'tenant_id' => Tenant::factory(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 999999.99),
            'week' => $this->faker->word,
            'period' => $this->faker->date(),
            'staffCollected' => Staff::factory(),
            'adminCollected' => Admin::factory(),
        ];
    }
}
