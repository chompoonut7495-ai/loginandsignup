<?php session_start(); ?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ioTE KMITL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Original.css">
</head>

<body>

    <header class="navbar" id="main-nav">
        <div class="logo">
            <img src="IoTeKMITL.png" alt="iGTE Logo">
        </div>

        <div class="menu-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav id="menu-container">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="About_IoT/IoT/index.php">About IoT</a></li>
                <li class="dropdown">
                    <a href="Academics/index.php">Academics <span class="arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Academics/IoT/index.php">IoT System and information</a></li>
                        <li><a href="Academics/ComIoT/index.php">Computer Engineering & IoT</a></li>
                        <li><a href="../Academics/Gened1/index.php">Gened</a></li>
                    </ul>
                </li>
                <li><a href="Admission/index.php">Admission</a></li>
                <li><a href="Contact/index.php">Contact</a></li>
                <li><a href="Faculty/index.php">Faculty</a></li>
                <li class="dropdown dropdown-right">
                    <a href="Performance/index.php">Performance <span class="arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Performance/DCL/index.php">Definition of Cybersecurity Lab</a></li>
                        <li><a href="Performance/CLR/index.php">Cybersecurity Lab Researcher</a></li>
                    </ul>
                </li>
                <!-- Login Button -->
                <li class="login-box">

                <?php if(isset($_SESSION['email'])): ?>
                    <a href="../../loginandsignup/logout.php" class="login-btn">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                <?php else: ?>
                    <a href="../../loginandsignup/login.php" class="login-btn">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span>Login</span>
                    </a>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
    </main>

    style="color:aliceblue"

    <script src="Original.js"></script>
</body>

</html>