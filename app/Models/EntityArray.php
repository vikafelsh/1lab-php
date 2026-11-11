
<?php
$categories = ['Desserts', 'Soups', 'Salads', 'Breakfasts', 'Main dishes'];
sort($categories);

$recipe = [
    'id' => 1,
    'userId' => 1,
    'categoryId' => 2,
    'title' => 'Vegetable Soup',
    'status' => 'published',
];
?>

<h2>Recipe Categories</h2>
<ul>
    <?php foreach ($categories as $category) { ?>
        <li><?= htmlspecialchars($category) ?></li>
    <?php } ?>
</ul>

<h2>Recipe Information</h2>
<ul>
    <?php foreach ($recipe as $key => $value) { ?>
        <li><?= htmlspecialchars($key) ?>: <?= htmlspecialchars((string) $value) ?></li>
    <?php } ?>
</ul>

