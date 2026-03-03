<?php
require "db.php";

$stmt = $conn->prepare("UPDATE users SET name=?, email=?, age=? WHERE id=?");
$stmt->bind_param("ssii",
    $_POST['name'],
    $_POST['email'],
    $_POST['age'],
    $_POST['id']
);
$stmt->execute();

header("Location: list.php");
exit;