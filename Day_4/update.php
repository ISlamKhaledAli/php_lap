<?php

require "db.php";

$stmt=$conn->prepare("UPDATE users SET first_name=? WHERE id=?");

$stmt->bind_param("si",$_POST['first_name'],$_POST['id']);

$stmt->execute();

header("Location: list.php");