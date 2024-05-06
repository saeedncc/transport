<?php

namespace App\Http\Resources\Monitor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonitorHistoryResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "monitor_id" => $this->monitor_id,
            "status" => $this->status,
            "date" => $this->date,
			
        ];

    }
}
