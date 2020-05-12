<?php
if (empty($_GET['name'])) {
    $greeting = "Hello World";
} else {
    $name = $_GET['name'];
    $greeting = "Hello, $name";
}

$task = [
    'title' => 'Finishing Coding',
    'due' => 'Today',
    'assigned_to' => 'Kurniadi',
    'completed' => true
];

$person = [
    'name' => 'Kurniadi',
    'university' => 'Telkom University',
    'age' => '18',
];

$student['hobby'] = 'Coding';
unset($student['hobby']);

require 'index-view.php';