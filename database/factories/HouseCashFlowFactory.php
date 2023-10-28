<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\House;
use App\Models\HouseCashFlow;
use App\Models\User;
use App\Models\Wallet;

class HouseCashFlowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HouseCashFlow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id' => House::factory(),
            'wallet_id' => Wallet::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'loggedBy' => User::factory(),
        ];
    }
}
