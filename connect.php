<?php
$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "class";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
