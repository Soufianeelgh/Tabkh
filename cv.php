
<?php
include 'db.php';
$sql = "SELECT * FROM users WHERE is_paid = 1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>السير الذاتية</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .cv-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 20px;
        }

        .cv-card {
            background: white;
            width: 90%;
            max-width: 400px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .cv-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .cv-card h3 {
            color: #333;
        }

        .cv-card p {
            color: #555;
            font-size: 14px;
        }
    </style>
   
</head>
<body>
<header>
  <nav>
    <ul>
      <li><a href="index.html">صفحة الطبخ</a></li>
      <li><a href="index.php">🏠 الصفحة الرئيسية</a></li>
      <li><a href="cv.php">المجتمع</a></li>
      <li><a href="process_register.php">التسجيل</a></li>
      <li><a href="payment.php">الدفع</a></li>
      <li><a href="comfirme_payment.php">تأكيد الدفع</a></li>
    </ul>
  </nav>
</header>
    <h2>قائمة الطهاة والخبراء</h2>
    <div class="cv-container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="cv-card">
                <img src="uploads/<?php echo $row['image']; ?>" alt="الصورة">
                <h3><?php echo $row['name']; ?></h3>
                <p>التخصص: <?php echo $row['specialization']; ?></p>
                <p>المدينة: <?php echo $row['city']; ?></p>
                <p>الخبرة: <?php echo $row['experience']; ?></p>
                <?php if (!empty($row['project_idea'])): ?>
                    <p>فكرة المشروع: <?php echo $row['project_idea']; ?></p>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
