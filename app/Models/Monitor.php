<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Carbon\Carbon;

class Monitor extends Model
{
    use HasFactory;
	
	
	protected $fillable = ['name','url','interval','method','body' ];
	
	
	protected $attributes = [
		'method'=>'get',
	];
	
	
	public function history(): HasMany
    {
		  return $this->hasMany(MonitorHistory::class, 'monitor_id');
    }
	
	
	protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) =>  strtolower(trim($value)),
        );
    }
	
	protected function body(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  $value ? json_decode($value) : null,
            set: fn ($value) =>  $value ? json_encode($value) : null,
        );
    }
	
	protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>   Carbon::parse($value)->format('Y/m/d H:i'),
        );
    }
}
