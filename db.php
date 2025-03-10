<?php
$host = "localhost";  // إذا كنت تستخدم استضافة ضع عنوان السيرفر
$user = "root";       // اسم المستخدم
$pass = "";           // كلمة المرور (على بعض السيرفرات يجب وضعها)
$db   = "mydatabase"; // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8"); // لدعم اللغة العربية
?>