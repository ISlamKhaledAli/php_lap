<?php
session_start();
?>

<nav class="navbar navbar-dark bg-dark p-3">

<div class="container">

<span class="text-white">

Welcome <?=$_SESSION['user'] ?? ""?>

</span>

<div>

<a href="list.php" class="btn btn-primary">Users</a>

<a href="logout.php" class="btn btn-danger">Logout</a>

<a href="register.php" class="btn btn-success">
Add User
</a>

</div>

</div>

</nav>