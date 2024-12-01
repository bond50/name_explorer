<?php
require __DIR__ . '/inc/all.inc.php';
$char = (string)($_GET['char'] ?? '');

if (strlen($char) > 1) $char = $char[0];

if (strlen($char) === 0) {
    header("location: index.php");
    die();
}

$char = strtoupper($char);
$page = (int)($_GET['page'] ?? 1);
$page = max(1, $page);
$count = count_names_by_initial($char);
$perPage = 15;

$names = fetch_names_by_initial($char, $page, $perPage);

render('char.view', [
        'names' => $names,
        'char' => $char,
        'pagination' => [
            'current' => $page,
            'total' => $count,
            'perPage' => $perPage,
        ],
    ]
);





