<?php
require "db.php";

$stmt = $conn->prepare("INSERT INTO users (name,email,age) VALUES (?,?,?)");
$stmt->bind_param("ssi", $_POST['name'], $_POST['email'], $_POST['age']);
$stmt->execute();

header("Location: list.php");
exit;