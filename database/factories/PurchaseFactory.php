<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Flat;
use App\Models\FromWallet;
use App\Models\House;
use App\Models\Purchase;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'refCode' => $this->faker->word,
            'house_id' => House::factory(),
            'flat_id' => Flat::factory(),
            'FromWallet' => FromWallet::factory(),
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'invoiceUpload' => $this->faker->word,
            'paymentMode' => $this->faker->randomElement(["Card","Cash","OutPocket"]),
            'status' => $this->faker->word,
        ];
    }
}
