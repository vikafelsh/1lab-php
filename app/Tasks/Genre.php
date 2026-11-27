<?php

declare(strict_types=1);

namespace App\Tasks;

class Genre
{
    public function __construct(
        public int $genre_id,
        public string $name,
        private array $artists = []
    ) {}

    public function addArtist(Artist $artist): void
    {
        $this->artists[] = $artist;
    }

    public function removeArtist(int $id): void
    {
        foreach ($this->artists as $key => $artist) {
            if ($artist->id === $id) {
                unset($this->artists[$key]);
            }
        }
    }

    public function getArtists(): array
    {
        return $this->artists;
    }
}
