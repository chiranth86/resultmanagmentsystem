<html>
<body><center>
<?php
$conn = new mysqli('localhost', 'root', '', 'result_management');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register_number = $_POST['register_number'];

    $query = "SELECT * FROM results WHERE register_number='$register_number'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>Results for Register Number: $register_number</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['marks']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
}
?>
<a href="student_view.html">Back </a></center>
</body>
</html>
