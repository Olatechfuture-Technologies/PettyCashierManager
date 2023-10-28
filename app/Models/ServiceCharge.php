<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCharge extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_id',
        'tenant_id',
        'amountPaid',
        'week',
        'period',
        'staffCollected',
        'adminCollected',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'house_id' => 'integer',
        'tenant_id' => 'integer',
        'amountPaid' => 'double',
        'period' => 'date',
        'staffCollected' => 'integer',
        'adminCollected' => 'integer',
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function staffCollected()
    {
        return $this->belongsTo(Staff::class);
    }

    public function adminCollected()
    {
        return $this->belongsTo(Admin::class);
    }
}
