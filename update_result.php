<html>
<body><center>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.html");
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'result_management');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register_number = $_POST['register_number'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $query = "UPDATE results SET marks=$marks WHERE register_number='$register_number' AND subject='$subject'";
    if ($conn->query($query) === TRUE) {
        echo "Result updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</center>
</body>
</html>
