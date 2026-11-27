<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\LoggerInterface;

class EntityService
{
    public function __construct(
        private LoggerInterface $logger
    ) {}

    public function create(): void
    {
        $this->logger->log('Рецепт створено');
    }
}
