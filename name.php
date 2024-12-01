<?php require __DIR__ . '/inc/all.inc.php';

$name = (string)($_GET['name'] ?? '');

$entries = fetch_name_entries($name);

if (empty($name)) {
    header('Location: char.php');
    die();

}

render('name.view',
    [
        'entries' => $entries,
        'name' => $name,
        'char' => $name[0]
    ]
);







