<?php
// Database connection
$host = "localhost";
$user = "root";
$password = ""; // default in XAMPP
$database = "college";

// Connect to DB
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
        }
        .container {
            width: 600px;
            margin: 80px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 12px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #008080;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Registered Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Show each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>". $row["id"] ."</td>
                        <td>". $row["name"] ."</td>
                        <td>". $row["email"] ."</td>
                        <td>". $row["course"] ."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No students found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>
</body>
</html>
