<?php

namespace Matt\Weight;

class WeightClass
{
    public function __construct(protected float $kilograms)
    {
        # Empty constructor
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
