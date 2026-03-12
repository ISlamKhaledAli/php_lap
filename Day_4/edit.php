<?php

require "db.php";

$id=$_GET['id'];

$user=$conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-5">

<div class="card shadow p-4">

<h3>Edit User</h3>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?=$user['id']?>">

<label>First Name</label>

<input class="form-control mb-3"
name="first_name"
value="<?=$user['first_name']?>">

<button class="btn btn-primary">Update</button>

</form>

</div>
</div>

</body>
</html>