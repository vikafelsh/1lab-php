<?php

declare(strict_types=1);

namespace App\Tasks;

class Artist
{
    public function __construct(
        public int $id,
        public string $name,
        public bool $isBand,
        public int $startYear
    ) {}
}
