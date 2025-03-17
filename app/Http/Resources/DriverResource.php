<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "Id" => $this->id,
            "Name" => $this->name,
            "LicenseNumber" => $this->license_number,
            "PhoneNumber" => $this->phone_number,
        ];

    }
}
