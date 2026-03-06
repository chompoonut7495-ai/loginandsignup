<?php
session_start();
require_once "config.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

$user = $result->fetch_assoc();

if(password_verify($password,$user['password'])){

$_SESSION['email'] = $email;

/* redirect กลับหน้าเดิม */

if(isset($_SESSION['redirect'])){
$redirect = $_SESSION['redirect'];
unset($_SESSION['redirect']);
header("Location: $redirect");
}else{
header("Location: index.php");
}

exit();

}else{

$_SESSION['login_error'] = "Wrong password";
header("Location: login.php");
exit();

}

}else{

$_SESSION['login_error'] = "Email not found";
header("Location: login.php");
exit();

}

}