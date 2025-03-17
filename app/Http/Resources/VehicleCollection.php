<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class VehicleCollection extends ResourceCollection
{


    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($item) {
            return (new VehicleResource($item));
        })->all();
    }
}
