<?php
// Step 1: Create an array of student names
$students = array("Anu", "Kiran", "Zoya", "Rahul", "Deepa");

// Step 2: Display the original array
echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 3: Sort using asort() - Ascending order
asort($students);
echo "<h3>Sorted Array (Ascending - asort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 4: Sort using arsort() - Descending order
arsort($students);
echo "<h3>Sorted Array (Descending - arsort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>
