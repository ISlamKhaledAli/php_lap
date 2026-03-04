<?php

require "db.php";

$errors=[];

$first=$_POST['first_name'];
$last=$_POST['last_name'];

if(empty($first) || preg_match('/\d/',$first)){
$errors[]="Invalid first name";
}

if(empty($_POST['skills'])){
$errors[]="Select at least one skill";
}

$password=$_POST['password'];

if(strlen($password)!=8 || preg_match('/[A-Z]/',$password) || preg_match('/[^a-z0-9_]/',$password)){
$errors[]="Password rules invalid";
}

$target="uploads/".basename($_FILES['image']['name']);

$type=pathinfo($target,PATHINFO_EXTENSION);

if($type!="jpg" && $type!="png"){
$errors[]="Only JPG or PNG allowed";
}

if($_FILES['image']['size']>2000000){
$errors[]="Image too large";
}

if(!empty($errors)){
print_r($errors);
exit;
}

move_uploaded_file($_FILES['image']['tmp_name'],$target);

$skills=implode(",",$_POST['skills']);

$hash=password_hash($password,PASSWORD_DEFAULT);

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
$hash,
$target
);

$stmt->execute();

header("Location: login.php");