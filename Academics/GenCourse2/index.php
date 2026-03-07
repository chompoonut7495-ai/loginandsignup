<?php session_start(); ?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ioTE Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../Original/Original.css">

</head>

<body>
    <header class="navbar" id="main-nav">
        <div class="logo">
            <img src="../../Original/IoTeKMITL.png" alt="iGTE Logo">
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="menu-container">
            <ul class="nav-links">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../About_IoT/IoT/index.php">About IoT</a></li>

                <li class="dropdown">
                    <a href="../../Academics/index.php" style="color:aliceblue">Academics <span
                            class="arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Academics/IoT/index.php">IoT System and information</a></li>
                        <li><a href="../../Academics/ComIoT/index.php">Computer Engineering & IoT</a></li>
                        <li><a href="../../Academics/Gened1/index.php">Gened</a></li>
                    </ul>
                </li>

                <li><a href="../../Admission/index.php">Admission</a></li>
                <li><a href="../../Contact/index.php">Contact</a></li>
                <li><a href="../../Faculty/index.php">Faculty</a></li>

                <li class="dropdown dropdown-right">
                    <a href="../../Performance/index.php">Performance <span class="arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Performance/DCL/index.php">Definition of Cybersecurity Laboratory</a></li>
                        <li><a href="../../Performance/CLR/index.php">Cybersecurity Laboratory Researcher</a></li>
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
    </header>

    <!-- Navigation bar-->
    <nav class="nav-bar">
        <a href="../Gened1/index.php" class="nav-btn">วิชา GenEd</a>
        <a href="../GenCourse2/index.php" class="nav-btn active">รายวิชาศึกษาทั่วไป</a>
        <a href="../hyflex3/index.php" class="nav-btn">Hyflex Learning</a>
    </nav> 


    <section class="top-section">
        <div class="top-image">
            <img src="image/m.jpg" alt="">
        </div>

        <div class="top-text">

            <p>
                ทุกวิชาจะมุ่งพัฒนาเน้นด้าน Soft Skills ให้กับนักศึกษาอย่างคุ้มค่าและตรงจุด
                ตอบโจทย์ผู้สนใจและอยากพัฒนาในสิ่งที่ตนเองชอบอย่างแท้จริง
            </p>
        </div>
    </section>

    <section class="card-section">

        <a href="bemybev.php" class="card">
            <img src="image/1.jpg">
            <h3>90642045 / 96642045</h3>
            <h4>BE MY BEV.</h4>
            <p>เรื่องเหล้า</p>
        </a>


        <a href="manandart.php" class="card">
            <img src="image/2.jpg">
            <h3>90642151 / 96642151</h3>
            <h4>MAN AND ART</h4>
            <p>มนุษย์กับศิลป์</p>
        </a>

        <a href="law.php" class="card">
            <img src="image/3.jpg">
            <h3>90642033 / 96642033</h3>
            <h4>LAW FOR NEW GENERATION</h4>
            <p>กฎหมายสำหรับคนรุ่นใหม่</p>
        </a>

        <a href="green.php" class="card">
            <img src="image/4.jpg">
            <h3>90642115 / 96642115</h3>
            <h4>GREEN TECHNOLOGY AND ALTERNATIVE ENERGY</h4>
            <p>เทคโนโลยีสีเขียวและพลังงานทดแทน</p>
        </a>

        <a href="bridge.php" class="card">
            <img src="image/5.jpg">
            <h3>90642195 / 96642195</h3>
            <h4>BRIDGE</h4>
            <p>บริดจ์</p>
        </a>

        <a href="ch.php" class="card">
            <img src="image/6.jpg">
            <h3>90644058 / 96644058</h3>
            <h4>CHINESE FANDOM</h4>
            <p>ภาษาจีนฉบับแฟนด้อม</p>
        </a>

    </section>

    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <img src="../../Original/IoTeKMITL.png" alt="IoTE Logo">
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-line"></i></a>
                </div>
            </div>
            <hr class="footer-line">
            <div class="footer-bottom">
                <div class="footer-col">
                    <h3>ABOUT US</h3>
                    <p><strong>Bachelor of Engineering</strong><br>(IoT System and Information)</p>
                    <br>
                    <p><strong>Dual Degree</strong><br>(B.Eng. IoT System + B.Sc. Industrial Physics)</p>
                </div>
                <div class="footer-col contact-info">
                    <h3>CONTACT US</h3>
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>ชั้น 12 อาคารเรียนรวม 12 ชั้น เลขที่ 1 ซอยฉลองกรุง 1 <br>แขวงลาดกระบัง เขตลาดกระบัง
                            กรุงเทพมหานคร 10520</p>
                    </div>
                    <div class="contact-item">
                        <i class="fa-regular fa-envelope"></i>
                        <p>iote@kmitl.ac.th<br>pikulkaew.ta@kmitl.ac.th</p>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <p>02-329-8000 ext.5129<br>02-329-8301 ext.235</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>