<?php

declare(strict_types=1);

function createRecipe(string $title, int $categoryId): bool
{
    return $title !== '' && $categoryId > 0;
}

function applyDiscount(float $price, float $discount): float
{
    if ($discount < 0 || $discount > 100) {
        throw new Exception('Неприпустиме значення знижки!');
    }

    return $price * (1 - $discount / 100);
}

var_dump(createRecipe('Vegetable Soup', 2));
