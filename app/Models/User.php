<?php

declare(strict_types=1);

namespace App\Models;

class User extends AbstractEntity
{
    public function getDetails(): string
    {
        return "User ID: $this->id, Created: $this->createdAt";
    }
}
