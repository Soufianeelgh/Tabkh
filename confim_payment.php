<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sql = "UPDATE users SET is_paid = 1 WHERE email = '$email'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: cv.php");
        exit();
    } else {
        echo "خطأ في التحديث: " . $conn->error;
    }
}
?>