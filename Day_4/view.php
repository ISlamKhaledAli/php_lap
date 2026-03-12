<?php

require "db.php";

$id=$_GET['id'];

$stmt=$conn->prepare("SELECT * FROM users WHERE id=?");

$stmt->bind_param("i",$id);

$stmt->execute();

$user=$stmt->get_result()->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

<title>User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-5">

<div class="card p-4 shadow">

<h3>User Profile</h3>

<img src="<?=$user['image']?>" width="150" class="mb-3">

<p><b>Name:</b> <?=$user['first_name']?> <?=$user['last_name']?></p>

<p><b>Country:</b> <?=$user['country']?></p>

<p><b>Gender:</b> <?=$user['gender']?></p>

<p><b>Skills:</b> <?=$user['skills']?></p>

</div>
</div>

</body>
</html>