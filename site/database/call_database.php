<?php
$servername = "localhost";
$username = "root";
$password = "digh1278";
$dbname = "schoolproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
