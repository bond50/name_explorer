<h1>Statistics for the name: <?= e($name) ?> </h1>

<?php if (empty($entries)) : ?>
    <p>No entries in our system</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Year</th>
            <th>Number of babies born</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($entries as $entry) : ?>
            <tr>
                <td><?= e($entry['year']) ?></td>
                <td><?= e($entry['count']) ?></td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
<?php endif; ?>
