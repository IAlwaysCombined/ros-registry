<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $cadastral_number
 * @property string $address
 * @property float $price
 * @property float $area
 */
class CadastralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'cadastral_number' => $this->cadastral_number,
            'address' => $this->address,
            'price' => $this->price,
            'area' => $this->area,
        ];
    }
}
