<?php require 'partials/header.php' ?>
<hi>
    <ul>
        <?php foreach ($tasks as  $task) : ?>
            <li>
                <?php if($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif;?>
            </li>
        <?php endforeach; ?>
    </ul>

</hi>
<?php require 'partials/footer.php' ?>