<?php

require "db.php";


$first = $_POST['first_name'];

if(preg_match('/\d/', $first)){
die("Name cannot contain numbers");
}


$target = "uploads/" . basename($_FILES['image']['name']);

$type = pathinfo($target, PATHINFO_EXTENSION);


if($type != "jpg" && $type != "png"){
die("Only JPG or PNG allowed");
}


if($_FILES['image']['size'] > 2000000){
die("Image too large");
}


move_uploaded_file($_FILES['image']['tmp_name'], $target);

$skills = implode(",", $_POST['skills']);

$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt=$conn->prepare("INSERT INTO users
(first_name,last_name,address,country,gender,skills,username,password,image)
VALUES(?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("sssssssss",

$_POST['first_name'],
$_POST['last_name'],
$_POST['address'],
$_POST['country'],
$_POST['gender'],
$skills,
$_POST['username'],
$pass,
$target

);

$stmt->execute();

header("Location: login.php");