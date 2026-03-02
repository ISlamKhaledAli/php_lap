<?php

$file = "data.txt";
$id = $_GET['id'];
$user = null;

$lines = file($file, FILE_IGNORE_NEW_LINES);

foreach ($lines as $line) {
    $data = explode(",", $line);
    if ($data[0] == $id) {
        $user = $data;
        break;
    }
}

if (!$user) {
    echo "User not found";
    exit;
}
?>

<h2>User Details</h2>

<p><strong>Name:</strong> <?= $user[1] ?></p>
<p><strong>Email:</strong> <?= $user[2] ?></p>
<p><strong>Age:</strong> <?= $user[3] ?></p>

<a href="list.php">Back</a>