<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'houseNo',
        'name',
        'address',
        'zipCode',
        'suitNo',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'zipCode' => 'boolean',
        'deleted_at' => 'timestamp',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function flats()
    {
        return $this->hasMany(Flat::class);
    }
}
