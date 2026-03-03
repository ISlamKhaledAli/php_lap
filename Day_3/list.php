<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>All Users</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card shadow p-4">

<h3>All Users</h3>

<table class="table table-bordered table-hover">
<thead class="table-dark">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Actions</th>
</tr>
</thead>

<tbody>
<?php
$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()):
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['age'] ?></td>
<td>
<a href="view.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">View</a>
<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

</div>
</div>

</body>
</html>