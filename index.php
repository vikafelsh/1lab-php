
<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$times = [];

for ($i = 0; $i < 10; $i++) {
    $times[] = $faker->numberBetween(10, 120);
}

$minTime = 60;

$filtered = array_filter($times, function ($time) use ($minTime) {
    return $time > $minTime;
});

print_r($times);
print_r($filtered);

require_once 'app/Services/EntityService.php';

try {
    echo applyDiscount(100, 150);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "\nСпробу розрахунку завершено.";
}


require_once 'app/Services/DataProcessor.php';

echo "\nМінімальна цифра: " . minDigit(1234076);
echo "\nПереставлені слова: " . swapWords('I love cooking');
echo "\nСимволи впорядковані: ";
var_dump(isSorted('abcde'));

