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

<h2>Edit User</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $user[0] ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= $user[1] ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $user[2] ?>" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" value="<?= $user[3] ?>" required><br><br>

    <button type="submit">Update</button>
</form>

<a href="list.php">Back</a>