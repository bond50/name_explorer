<h1>Most Common names</h1>
<ol>
    <?php foreach ($overview as $name) : ?>
        <li>
            <a href="name.php?<?= http_build_query(['name' => $name['name']]) ?>">
                <?= e($name['name']); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ol>

?
