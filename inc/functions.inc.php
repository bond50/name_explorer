<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function gen_alphabet(): array
{
    $A = ord('A');
    $Z = ord('Z');
    $letters = [];
    for ($i = $A; $i <= $Z; $i++) {
        $letters[] = chr($i);
    }
    return $letters;
}

function render($view, $params): void
{
    extract($params);
    ob_start();
    require  __DIR__ . "/../views/pages/$view.php";
    $contents = ob_get_clean();
    $alphabet = gen_alphabet();
    require  __DIR__ . "/../views/layouts/main.view.php";

}
