<?php
declare(strict_types=1);


function fetch_names_by_initial(string $char, int $page, int $perPage): array
{
    global $pdo;


    $stmt = $pdo->prepare("SELECT DISTINCT `name`  FROM `names` WHERE `name` LIKE :exp  ORDER BY `name` ASC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':exp', $char . '%');
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', ($page - 1) * $perPage, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $names = [];
    foreach ($results as $result) {
        $names[] = $result['name'];
    }
    return $names;

}

function count_names_by_initial(string $char): int
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(DISTINCT `name`) as `count` FROM `names` WHERE `name` LIKE :exp");
    $stmt->bindValue(':exp', $char . '%');
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC)['count'];
}

function fetch_name_entries(string $name): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM names WHERE name = :name ORDER BY year");
    $stmt->bindValue(':name', $name);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function generate_names_overview(): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT  `name`, SUM(`count`) as sum FROM `names` GROUP BY `name` ORDER BY sum DESC LIMIT 15;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);


}