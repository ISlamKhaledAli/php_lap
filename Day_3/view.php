<?php
require "db.php";

$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if(!$user){ die("User not found"); }
?>

<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card shadow p-4">
<h3>User Details</h3>

<p><strong>Name:</strong> <?= $user['name'] ?></p>
<p><strong>Email:</strong> <?= $user['email'] ?></p>
<p><strong>Age:</strong> <?= $user['age'] ?></p>

<a href="list.php" class="btn btn-secondary">Back</a>
</div>
</div>

</body>
</html>