<?php
session_start();
session_unset();
session_destroy();

header("Location: " . $_SERVER['HTTP_REFERER']); //กลับหน้าล่าสุดที่กด log out
exit();