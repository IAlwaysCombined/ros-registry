<?php

namespace App\Http\Dto;

readonly class PlotDto
{
    public string $number;
    public string $address;
    public float $price;
    public float $area;

    /**
     * @param string $number
     * @param string $address
     * @param float $price
     * @param float $area
     */
    public function __construct(
        string $number,
        string $address,
        float $price,
        float $area
    )
    {
        $this->number = $number;
        $this->address = $address;
        $this->price = $price;
        $this->area = $area;
    }

    /**
     * @param object $result
     * @return PlotDto
     */
    public static function fromResponse(object $result): PlotDto{
        return new self(
            number: $result->number,
            address: $result->attrs->plot_address,
            price: $result->attrs->plot_price,
            area: $result->attrs->plot_area,
        );
    }
}
