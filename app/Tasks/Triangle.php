<?php

declare(strict_types=1);

namespace App\Tasks;

class Triangle
{
    public function __construct(
        public readonly float $a,
        public readonly float $b,
        public readonly float $c
    ) {}

    public function getPerimeter(): float
    {
        return $this->a + $this->b + $this->c;
    }

    public function getArea(): float
    {
        $p = $this->getPerimeter() / 2;

        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}
