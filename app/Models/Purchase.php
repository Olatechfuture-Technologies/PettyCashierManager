<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'refCode',
        'house_id',
        'flat_id',
        'FromWallet',
        'amount',
        'invoiceUpload',
        'paymentMode',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'house_id' => 'integer',
        'flat_id' => 'integer',
        'FromWallet' => 'integer',
        'amount' => 'double',
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }

    public function flat()
    {
        return $this->belongsTo(Flat::class);
    }

    public function fromWallet()
    {
        return $this->belongsTo(FromWallet::class);
    }
}
