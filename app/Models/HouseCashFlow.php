<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseCashFlow extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_id',
        'wallet_id',
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
        'house_id' => 'integer',
        'wallet_id' => 'integer',
        'amount' => 'double',
        'loggedBy' => 'integer',
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function loggedBy()
    {
        return $this->belongsTo(User::class);
    }
}
