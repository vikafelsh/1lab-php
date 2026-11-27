<?php

declare(strict_types=1);

namespace App\Tasks;

abstract class Person
{
    abstract public function getRoleDetails(): string;
}
