<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التسجيل</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <form action="process_register.php" method="POST" enctype="multipart/form-data">
        <h2>التسجيل</h2>
        <input type="text" name="name" placeholder="الاسم الكامل" required>
        <input type="email" name="email" placeholder="البريد الإلكتروني" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <input type="text" name="specialization" placeholder="التخصص">
        <input type="text" name="city" placeholder="المدينة">
        <textarea name="experience" placeholder="الخبرة"></textarea>
        <textarea name="project_idea" placeholder="فكرة المشروع (اختياري)"></textarea>
        <input type="file" name="image" accept="image/*">
        <button type="submit">إنشاء الحساب</button>
    </form>
</body>
</html>