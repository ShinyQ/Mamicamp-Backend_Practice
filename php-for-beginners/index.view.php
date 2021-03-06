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
    <nav>
        <li><a href="/page/about.php">About</a></li>
        <li><a href="/page/contact.php">Contact</a></li>
    </nav>
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
        </ul>
    </ul>

    <ul>
        <h3>TODO From Database</h3>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>