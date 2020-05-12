<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            <?= $greeting ?>
        </h1>
    </header>

    <ul>
        <?php foreach ($person as $key => $self) : ?>
            <li><?= ucwords($key) . ': ' . $self ?></li>
        <?php endforeach ?>
    </ul>

    <ul>
        <h1>Task For The Day</h1>
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title'] ?>
            </li>

            <li>
                <strong>Due: </strong> <?= $task['due'] ?>
                <?php
                if ($task['due'] == 'Today') {
                    echo ", <font color='red'><strong>Semangat !!!</strong></font>";
                }
                ?>
            </li>

            <li>
                <strong>Personal Responsible: </strong> <?= $task['assigned_to'] ?>
            </li>

            <li>
                <strong>Status: </strong> <?= $task['completed'] ? 'DONE' : 'NOT DONE' ?>
                <?php if ($task['completed']) : ?>
                    <span class="icon">&#9989</span>
                <?php endif ?>
            </li>
            <li>
                <strong>Message: </strong><?= $message ?>
            </li>
        </ul>
    </ul>
</body>

</html>