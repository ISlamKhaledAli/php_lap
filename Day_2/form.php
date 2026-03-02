<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    label {
        font-weight: bold;
    }
    input {
        width: 300px;
        padding: 8px;
        margin-top: 5px;
    }
    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>
<h2>Add New User</h2>

<form action="save.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" required><br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="list.php">View All Users</a>

</body>
</html>