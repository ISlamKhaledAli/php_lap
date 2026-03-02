<?php

$file = "data.txt";

$id = uniqid();
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$line = $id . "," . $name . "," . $email . "," . $age . PHP_EOL;

file_put_contents($file, $line, FILE_APPEND);

header("Location: list.php");
exit;