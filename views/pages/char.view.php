

<ul>
    <?php foreach ($names as $name): ?>
        <li>
            <a href="name.php?<?= http_build_query(['name' => $name]) ?>">
                <?= e($name) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<div class="pagination">
    <?php
    $totalPages = ceil($pagination['total']/$pagination['perPage']);
    $currentPage = $pagination['current'];
    for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?<?= http_build_query(['char' => $char, 'page' => $i]) ?>"
           class="button <?= $i === $currentPage ? 'active' : '' ?>">
            <?= e($i) ?>
        </a>
    <?php endfor; ?>
</div>