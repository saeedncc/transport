<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['plate_number','brand', 'model', 'year', 'driver_id' ];

    protected $attributes = [];

    protected $casts = [
        'created_at' => 'datetime:Y/m/d H:i',
        'updated_at' => 'datetime:Y/m/d H:i',
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }


}
