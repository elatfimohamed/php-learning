<?php require 'partials/header.blade.php' ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed == true): ?>
                <strike>
            <?php endif; ?>
            <?= $task->name; ?>
            <?php if ($task->completed == true): ?>
                </strike>
            <?php endif; ?>
        </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>


