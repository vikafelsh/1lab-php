<?php

declare(strict_types=1);

namespace App\Tasks;

class DepartmentHead extends Teacher
{
    public function getRoleDetails(): string
    {
        return parent::getRoleDetails().' -> Завідувач кафедри';
    }
}
