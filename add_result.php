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
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $query = "INSERT INTO results (register_number, name, subject, marks) VALUES ('$register_number', '$name', '$subject', $marks)";
    if ($conn->query($query) === TRUE) {
        echo "Result added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</center>
</body>
</html>