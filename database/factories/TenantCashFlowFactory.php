<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Staff;
use App\Models\Tenant;
use App\Models\TenantCashFlow;
use App\Models\TenantWallet;

class TenantCashFlowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TenantCashFlow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tenant_id' => Tenant::factory(),
            'tenant_wallet_id' => TenantWallet::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'loggedBy' => Staff::factory(),
        ];
    }
}
