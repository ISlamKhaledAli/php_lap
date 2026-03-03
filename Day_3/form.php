<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php"; ?>

<div class="container">
<div class="card shadow p-4">
<h3>Add New User</h3>

<form action="save.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" class="form-control" required>
  </div>

  <button class="btn btn-primary">Save</button>
</form>
</div>
</div>

</body>
</html>