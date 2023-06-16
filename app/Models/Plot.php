<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $cadastral_number
 * @property string $address
 * @property float $price
 * @property float $area
 */
class Plot extends Model
{
    use HasFactory;

    protected $fillable = [
        'cadastral_number',
        'address',
        'price',
        'area'
    ];
}
