<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "com_261449_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>