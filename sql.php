<?php
// Set your database credentials directly
$host = "127.0.0.1";  // It's a good practice to use the IP address for the MySQL host
$user = "root";
$ps = "";  // Assuming your root user does not have a password set
$project = "dbms_project";  // Make sure to use the exact database name

// Create connection
$conn = mysqli_connect($host, $user, $ps, $project);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Continue with your code, using the $conn variable for database operations
?>

