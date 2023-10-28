<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantCashFlow extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenant_id',
        'tenant_wallet_id',
        'amount',
        'loggedBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tenant_id' => 'integer',
        'tenant_wallet_id' => 'integer',
        'amount' => 'double',
        'loggedBy' => 'integer',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function tenantWallet()
    {
        return $this->belongsTo(TenantWallet::class);
    }

    public function loggedBy()
    {
        return $this->belongsTo(Staff::class);
    }
}
