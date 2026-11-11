<?php

declare(strict_types=1);

function minDigit(int $number): int
{
    return (int) min(str_split((string) $number));
}

function swapWords(string $text): string
{
    $words = explode(' ', $text);
    $last = count($words) - 1;

    [$words[0], $words[$last]] = [$words[$last], $words[0]];

    return implode(' ', $words);
}

function isSorted(string $text): bool
{
    $letters = str_split(preg_replace('/[^a-z]/', '', $text));

    $sorted = $letters;
    sort($sorted);

    return $letters === $sorted;
}
