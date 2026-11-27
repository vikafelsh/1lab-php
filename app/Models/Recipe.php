<?php

declare(strict_types=1);

namespace App\Models;

use App\Interfaces\ExportableInterface;
use App\Traits\JsonExportTrait;

class Recipe extends AbstractEntity implements ExportableInterface
{
    use JsonExportTrait;

    public function getDetails(): string
    {
        return "Recipe ID: $this->id, Created: $this->createdAt";
    }
}
