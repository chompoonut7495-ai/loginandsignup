<!--  Comment Section เพิ่มก้อนนี้ ไว้บนสุด -->
<?php
session_start();
require_once "config.php";

$course_id = 4;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email'])) {

    $comment = $_POST['comment'];
    $user_email = $_SESSION['email'];

    $stmt = $conn->prepare("INSERT INTO comments (course_id, user_email, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $course_id, $user_email, $comment);
    $stmt->execute();

    header("Location: inlove.php"); // รีเฟรชหน้า
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>In Love & In Life อินเลิฟ อินไลฟ์</title>

<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style.c.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<div class="page-header">
    <a href="index.php">
        <i class="fa-solid fa-arrow-turn-up" style="color: #213443;"></i>
    </a>
    <h1>In Love & In Life อินเลิฟ อินไลฟ์</h1>
</div>

<div class="detail-container">
    <div class="detail-card">
        <div class="detail-title">
            รายละเอียด
        </div>

        <div class="detail-content">
            <p><b>In Love & In Life อินเลิฟ อินไลฟ์</b></p>
            <p>หมวดวิชา - หมวดวิชา : กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ</p>
            <p>เกรดที่ได้รับ : S/U</p>
            <p>หน่วยกิต : 3 หน่วยกิต</p>
            <br>
        </div>
    </div>

<!--  Comment Section เปลี่ยนก้อนนี้ทั้งก้อน-->
    <section class="comment-section">

    <h2>Comments</h2>

    <div class="comment-list">

        <?php
        $result = $conn->query("SELECT * FROM comments 
                                WHERE course_id = $course_id 
                                ORDER BY created_at DESC");

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>

            <div class="comment">
                <div class="avatar"></div>

                <div class="comment-content">
                    <div class="comment-header">
                        <?php echo htmlspecialchars($row['user_email']); ?>
                        <span class="time">
                            <?php echo $row['created_at']; ?>
                        </span>
                    </div>

                    <div class="comment-text">
                        <?php echo htmlspecialchars($row['comment']); ?>
                    </div>
                </div>
            </div>

        <?php
            }
        } else {
            echo "<p>No comment yet</p>";
        }
        ?>

    </div>



    <?php if(isset($_SESSION['email'])): ?>

        <form method="POST" class="comment-input-box">
            <input type="text" name="comment" placeholder="Review something..." required />
            <button type="submit">➤</button>
        </form>

    <?php else: ?>

        <div class="comment-input-box">
            <input type="text" placeholder="Login to comment..." disabled />
            <button disabled>➤</button>
        </div>

    <?php endif; ?>

</section>

</div>
</div>


</body>
</html>