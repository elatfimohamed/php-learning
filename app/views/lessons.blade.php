<?php require 'partials/header.blade.php' ?>

<h1>Lessons:</h1>
<ul>
    <?php foreach ($lessons as $lesson) : ?>
        <li>
            <?= $lesson->name; ?>
        </li>
    <?php endforeach;?>
</ul>
<?php require 'partials/footer.blade.php' ?>
