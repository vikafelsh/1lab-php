<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Core\Database;
use App\Core\EntityFactory;
use App\Services\ConsoleLogger;
use App\Services\EntityService;
use App\Tasks\Artist;
use App\Tasks\DepartmentHead;
use App\Tasks\Genre;
use App\Tasks\Student;
use App\Tasks\Teacher;
use App\Tasks\Triangle;

Database::getInstance();

$factory = new EntityFactory;

$recipe = $factory->createEntity('recipe', [
    'id' => 1,
    'createdAt' => '2026-11-23',
]);

$user = $factory->createEntity('user', [
    'id' => 2,
    'createdAt' => '2026-11-23',
]);

echo $recipe->getDetails()."\n";
echo $user->getDetails()."\n";

echo $recipe->exportToJson()."\n";

$logger = new ConsoleLogger;
$service = new EntityService($logger);
$service->create();

echo "\n--- Завдання 6.1 ---\n";

$genre = new Genre(1, 'Rock');

$artist1 = new Artist(1, 'Queen', true, 1970);
$artist2 = new Artist(2, 'Nirvana', true, 1987);

$genre->addArtist($artist1);
$genre->addArtist($artist2);

foreach ($genre->getArtists() as $artist) {
    echo $artist->name."\n";
}

$genre->removeArtist(1);

echo "Після видалення:\n";

foreach ($genre->getArtists() as $artist) {
    echo $artist->name."\n";
}

echo "\n--- Завдання 6.2 ---\n";

$student = new Student;
$teacher = new Teacher;
$head = new DepartmentHead;

echo $student->getRoleDetails()."\n";
echo $teacher->getRoleDetails()."\n";
echo $head->getRoleDetails()."\n";

echo "\n--- Завдання 6.3 ---\n";

$triangle = new Triangle(3, 4, 5);

echo 'Периметр: '.$triangle->getPerimeter()."\n";
echo 'Площа: '.$triangle->getArea()."\n";
