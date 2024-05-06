<?php

namespace App\Http\Resources\Monitor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MonitorHistoryCollection extends ResourceCollection
{


    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($item) {
            return (new MonitorHistoryResource($item));
        })->all();
    }
}
