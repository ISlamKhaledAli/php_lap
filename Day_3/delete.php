<?php
require "db.php";

$stmt = $conn->prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: list.php");
exit;