<?php

session_start();

require "db.php";

$stmt=$conn->prepare("SELECT * FROM users WHERE username=?");

$stmt->bind_param("s",$_POST['username']);

$stmt->execute();

$result=$stmt->get_result();

$user=$result->fetch_assoc();

if(!$user || !password_verify($_POST['password'],$user['password'])){
die("Invalid login");
}

$_SESSION['user']=$user['username'];

header("Location: list.php");