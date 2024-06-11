<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'result_management');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid login credentials";
    }
}
?>
