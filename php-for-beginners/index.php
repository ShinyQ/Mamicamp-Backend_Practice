<?php

require 'functions.php';

if (empty($_GET['name'])) {
    $greeting = "Hello World";
} else {
    $name = $_GET['name'];
    $greeting = "Hello, $name";
}

$my_age = 18;
$age = check_age($my_age);
if ($age) {
    $message = "You're Not Welcome";
} else {
    $message =  "WELCOME !!!";
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