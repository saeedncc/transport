<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "Id" => $this->id,
            "PlateNumber" => $this->plate_number,
            "Brand" => $this->brand,
            "Model" => $this->model,
            "Year" => $this->year,
            "Driver" => $this->when($this->driver, new DriverResource($this->driver)),
        ];

    }
}
