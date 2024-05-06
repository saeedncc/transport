<?php

namespace App\Http\Resources\Monitor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonitorResource extends JsonResource
{


    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "url" => $this->url,
            "method" => $this->method,
            "interval" => $this->interval." دقیقه",
            "body" => $this->when($this->body, $this->body),
            "date" => $this->date,
			
        ];

    }
}
