<?php
require "db.php";

$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card shadow p-4">
<h3>Edit User</h3>

<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?= $user['id'] ?>">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?= $user['name'] ?>" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
</div>

<div class="mb-3">
<label>Age</label>
<input type="number" name="age" class="form-control" value="<?= $user['age'] ?>" required>
</div>

<button class="btn btn-primary">Update</button>
</form>

</div>
</div>

</body>
</html>