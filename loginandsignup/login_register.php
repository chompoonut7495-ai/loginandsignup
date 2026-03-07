<?php

session_start(); 
require_once 'config.php'; //เรียกไฟล์เชื่อมฐานข้อมูล



/* reg */
if (isset($_POST['register'])) {

    // รับค่าจาก form
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];


    /* ตรวจสอบ email ต้องเป็น @kmitl.ac.th */
    if (!str_ends_with($email, "@kmitl.ac.th")) {

        $_SESSION['register_error'] = "Please signup with (@kmitl.ac.th) only..";
        header("Location: login.php");
        exit();
    }


    /* ตรวจสอบ password กับ confirm password */
    if ($password !== $confirm) {

        $_SESSION['register_error'] = "Passwords do not match!";
        header("Location: login.php");
        exit();
    }


    /* ตรวจสอบ email ซ้ำใน database */
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($check->num_rows > 0) {

        $_SESSION['register_error'] = "Email already exists!";
        header("Location: login.php");
        exit();
    }


    /* เข้ารหัส password ก่อนเก็บ */
    $hash = password_hash($password, PASSWORD_DEFAULT);


    /* เพิ่มข้อมูล user ลง database */
    $conn->query("INSERT INTO users (email, password) VALUES ('$email', '$hash')");


    /* สมัครเสร็จ กลับไปหน้า login */
    header("Location: login.php");
    exit();
}





/* login*/
if (isset($_POST['login'])) {

   
    $email    = $_POST['email'];
    $password = $_POST['password'];


    
    if (!str_ends_with($email, "@kmitl.ac.th")) {

        $_SESSION['login_error'] = "Please login with (@kmitl.ac.th) only..";
        header("Location: login.php");
        exit();
    }


    /* ค้นหา user จาก email */
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");


    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();


        /* ตรวจสอบ password */
        if (password_verify($password, $user['password'])) {

            $_SESSION['email'] = $email; // เก็บ session ว่า login แล้ว
            header("Location: ../index.php");
            exit();
        }
    }


    /* ถ้า login ไม่สำเร็จ */
    $_SESSION['login_error'] = "Incorrect email or password!";
    header("Location: login.php");
    exit();
}

?>