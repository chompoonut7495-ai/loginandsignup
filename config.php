<?php
date_default_timezone_set('Asia/Bangkok');

$host = "10.26.7.181";
$user = "webuser";
$password = "123456";
$database = "loginandsignup";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
$conn->query("SET time_zone = '+07:00'");
?>