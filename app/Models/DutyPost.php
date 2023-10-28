<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutyPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'duty_id',
        'staff_id',
        'flat_id',
        'tenants',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'duty_id' => 'integer',
        'staff_id' => 'integer',
        'flat_id' => 'integer',
    ];

    public function duty()
    {
        return $this->belongsTo(Duty::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function flat()
    {
        return $this->belongsTo(Flat::class);
    }
}
