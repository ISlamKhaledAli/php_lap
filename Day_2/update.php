<?php

$file = "data.txt";
$id = $_POST['id'];

$lines = file($file, FILE_IGNORE_NEW_LINES);
$newData = [];

foreach ($lines as $line) {
    $data = explode(",", $line);

    if ($data[0] == $id) {
        $line = $id . "," . $_POST['name'] . "," . $_POST['email'] . "," . $_POST['age'];
    }

    $newData[] = $line;
}

file_put_contents($file, implode(PHP_EOL, $newData) . PHP_EOL);

header("Location: list.php");
exit;