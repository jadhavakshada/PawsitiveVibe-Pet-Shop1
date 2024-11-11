
<?php
$servername = "localhost";
$username = "root";
$password = "";  // If you have a password for root, put it here
$dbname = "pet_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

