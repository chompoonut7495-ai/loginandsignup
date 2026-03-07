<?php
session_start(); //เริ่มเก็บข้อมูลผู้ใช้ รู้ว่า user loginแล้ว 

$login_error    = $_SESSION['login_error'] ?? "";
$register_error = $_SESSION['register_error'] ?? "";

unset($_SESSION['login_error']);
unset($_SESSION['register_error']);
?>

<!DOCTYPE html>
<html lang="th">

<head>

    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">

    <style>
        .form-box {
            display: none;
        }

        .form-box.active {
            display: block;
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- logo -->
        <div class="left">
            <img src="logo.png">
        </div>

        
        <div class="right">

            <div class="login-box">

                <!-- login -->
                <div class="form-box active" id="login-form">

                    <h1>LOGIN</h1>

                    <?php if ($login_error): ?>
                        <p style="color:red"><?= $login_error ?></p>
                    <?php endif; ?>

                    <form action="login_register.php" method="POST">

                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password" required>
                        </div>

                        <button type="submit" name="login" class="login-btn">
                            LOGIN
                        </button>

                    </form>

                    <p>
                        Don't have an account?
                        <a href="#" onclick="showForm('register-form')">Sign Up</a>
                    </p>

                </div>



                <!-- reg -->
                <div class="form-box" id="register-form">

                    <h1>SIGN UP</h1>

                    <?php if ($register_error): ?>
                        <p style="color:red"><?= $register_error ?></p>
                    <?php endif; ?>

                    <form action="login_register.php" method="POST">

                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password" required>
                        </div>

                        <div class="input-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" required>
                        </div>

                        <button type="submit" name="register" class="login-btn">
                            SIGN UP
                        </button>

                    </form>

                    <p>
                        Already have an account?
                        <a href="#" onclick="showForm('login-form')">Login</a>
                    </p>

                </div>

            </div>

        </div>

    </div>



    <script>

        function showForm(id) {

            document.querySelectorAll(".form-box")
                .forEach(el => el.classList.remove("active"));

            document.getElementById(id)
                .classList.add("active");

        }

    </script>

</body>

</html>