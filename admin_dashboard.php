<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        h2{
            text-align: center;
        }
        .l{
            list-style: none;
            display: flex;
            gap: 36px;
            margin-left: 53vh;
            padding: 10vh;
        }
    </style>
</head>
<body>
    <h2>Welcome, Admin</h2><ul class="l">
    <li><a href="add_result.html">Add Result</a></li><br>
    <li><a href="update_result.html">Update Result</a></li><br>
    <li><a href="delete_result.html">Delete Result</a></li><br>
    <li><a href="logout.php">Logout</a></li></ul>
</body>
</html>
