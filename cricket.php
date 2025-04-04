<?php
// Create an array of Indian cricket player names
$players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Hardik Pandya", "Jasprit Bumrah");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #008080;
            color: white;
        }
    </style>
</head>
<body>

    <h2>List of Indian Cricket Players</h2>

    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        // Loop through the array and display each player in a table row
        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>

</body>
</html>
