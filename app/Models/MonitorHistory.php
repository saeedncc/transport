<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Carbon\Carbon;

class MonitorHistory extends Model
{
    use HasFactory;
	
	
	protected $fillable = ['monitor_id','status' ];
	
	
	
	public function monitor(): BelongsTo
    {
        return $this->belongsTo(Monitor::class);
    }
	
	
	protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>   Carbon::parse($value)->format('Y/m/d H:i'),
        );
    }
	
}
