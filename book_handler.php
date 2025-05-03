<?php
$conn = new mysqli("localhost", "root", "", "library");
if ($conn->connect_error) die("DB connection failed.");

if (isset($_POST['add'])) {
    $a = $_POST['accession'];
    $t = $_POST['title'];
    $au = $_POST['authors'];
    $e = $_POST['edition'];
    $p = $_POST['publisher'];
    $conn->query("INSERT INTO books VALUES ('$a', '$t', '$au', '$e', '$p')");
    echo "<p class='msg'>Book added.</p>";
}

if (isset($_GET['search'])) {
    $s = $_GET['search'];
    $q = $conn->query("SELECT * FROM books WHERE title LIKE '%$s%'");
    echo "<div class='box'><h3>Results</h3>";
    if ($q->num_rows > 0) {
        while ($r = $q->fetch_assoc()) {
            echo "<div class='result'><b>{$r['title']}</b><br>Acc: {$r['accession_number']}<br>Author: {$r['authors']}<br>Edition: {$r['edition']}<br>Publisher: {$r['publisher']}</div>";
        }
    } else echo "No match found.";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Handler</title>
<style>
body { font-family: sans-serif; padding: 20px; background: #f2f2f2; }
form { background: #fff; padding: 15px; border-radius: 6px; width: 300px; margin-bottom: 20px; }
input[type=text], input[type=submit] { width: 100%; padding: 6px; margin-top: 8px; }
input[type=submit] { background: #4CAF50; color: white; border: none; cursor: pointer; }
.result { background: #e8f4ea; padding: 10px; margin: 10px 0; border-radius: 4px; }
.box { background: white; padding: 15px; border-radius: 6px; width: 300px; }
.msg { color: green; font-weight: bold; }
</style>
</head>
<body>

<h2>Add Book</h2>
<form method="post">
    <input type="text" name="accession" placeholder="Accession No" required>
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="authors" placeholder="Authors" required>
    <input type="text" name="edition" placeholder="Edition" required>
    <input type="text" name="publisher" placeholder="Publisher" required>
    <input type="submit" name="add" value="Add Book">
</form>

<h2>Search Book</h2>
<form method="get">
    <input type="text" name="search" placeholder="Enter Title" required>
    <input type="submit" value="Search">
</form>

</body>
</html>
