<?php
$file = "data.txt";
$users = [];

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        $users[] = explode(",", $line);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

<h2>All Users</h2>
<a href="form.php">Add New User</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user[1] ?></td>
            <td><?= $user[2] ?></td>
            <td><?= $user[3] ?></td>
            <td>
                <a href="view.php?id=<?= $user[0] ?>">View</a> |
                <a href="edit.php?id=<?= $user[0] ?>">Edit</a> |
                <a href="delete.php?id=<?= $user[0] ?>" onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>