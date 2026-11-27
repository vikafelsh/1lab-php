<?php

declare(strict_types=1);

namespace App\Core;

use App\Models\Recipe;
use App\Models\User;

class EntityFactory
{
    public function createEntity(string $type, array $data): Recipe|User
    {
        return match ($type) {
            'recipe' => new Recipe($data['id'], $data['createdAt']),
            'user' => new User($data['id'], $data['createdAt']),
            default => throw new \InvalidArgumentException('Невідомий тип'),
        };
    }
}
