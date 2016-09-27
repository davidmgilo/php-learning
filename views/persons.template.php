<?php require 'partials/header.php' ?>
<hi>

    <ul>
        <?php foreach ($tasks as  $task) : ?>
            <li>
                    <?= $task->LastName ?>
            </li>
        <?php endforeach; ?>
    </ul>

</hi>
<?php require 'partials/footer.php' ?>