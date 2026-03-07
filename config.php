<?php
$host = "10.26.7.181";
$user = "webuser";
$password = "123456";
$database = "loginandsignup";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>