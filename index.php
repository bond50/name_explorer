<?php
require __DIR__ . '/inc/all.inc.php';

$overview = generate_names_overview();

render('index.view', ['overview' => $overview]);




