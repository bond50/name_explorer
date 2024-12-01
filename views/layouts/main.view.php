<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css"/>
    <link rel="stylesheet" type="text/css" href="./styles/custom.css"/>
    <title>Name explorer</title>
</head>
<body>
<header>
    <h1><a href="index.php">
            Name explorer
        </a></h1>
    <p>Explore and find names</p>
    <nav>
        <?php foreach ($alphabet as $character): ?>
            <a href="char.php?<?= http_build_query(['char' => $character]) ?>"
               <?php if (!empty($char) && $char === $character):?> class="active" <?php endif?>>
                <?= e($character) ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>
<main>
    <?= $contents; ?>
</main>
</body>
</html>