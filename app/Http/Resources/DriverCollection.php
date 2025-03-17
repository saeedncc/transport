<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DriverCollection extends ResourceCollection
{


    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($item) {
            return (new DriverResource($item));
        })->all();
    }
}
