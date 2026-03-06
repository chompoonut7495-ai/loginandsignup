<?php

$servername = "localhost"; // ชื่อ server database
$username = "root"; // username ของ database
$password = ""; // password database
$dbname = "website_db"; // ชื่อฐานข้อมูล

$conn = new mysqli($servername, $username, $password, $dbname); // สร้างการเชื่อมต่อกับ MySQL

if ($conn->connect_error) { // ตรวจสอบว่าเชื่อมต่อสำเร็จหรือไม่
    die("Connection failed: " . $conn->connect_error); // ถ้าไม่สำเร็จให้หยุดและแสดง error
}

?>