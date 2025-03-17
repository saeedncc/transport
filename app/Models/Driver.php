<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable = ['name','license_number', 'phone_number' ];

    protected $attributes = [];

    protected $casts = [
        'created_at' => 'datetime:Y/m/d H:i',
        'updated_at' => 'datetime:Y/m/d H:i',
    ];

    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }


}
