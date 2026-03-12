<?php

session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit;
}

require "db.php";

$result=$conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>

<head>

<title>Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-4">

<div class="card shadow p-4">

<h3 class="mb-3">Users List</h3>

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Name</th>
<th>Image</th>
<th>Actions</th>
</tr>

<?php while($row=$result->fetch_assoc()): ?>

<tr>

<td><?=$row['id']?></td>

<td><?=$row['first_name']?></td>

<td>
<img src="<?=$row['image']?>" width="50">
</td>

<td>

<a class="btn btn-info btn-sm"
href="view.php?id=<?=$row['id']?>">View</a>

<a class="btn btn-warning btn-sm"
href="edit.php?id=<?=$row['id']?>">Edit</a>

<a class="btn btn-danger btn-sm"
href="delete.php?id=<?=$row['id']?>">Delete</a>

</td>

</tr>

<?php endwhile; ?>

</table>

</div>
</div>

</body>
</html>