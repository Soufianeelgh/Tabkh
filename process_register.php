<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $specialization = $_POST["specialization"];
    $city = $_POST["city"];
    $experience = $_POST["experience"];
    $project_idea = $_POST["project_idea"];
    
    $image = $_FILES["image"]["name"];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target);

    $sql = "INSERT INTO users (name, email, password, specialization, city, experience, project_idea, image) 
            VALUES ('$name', '$email', '$password', '$specialization', '$city', '$experience', '$project_idea', '$image')";

    if ($conn->query($sql) === TRUE) {
        header("Location: payment.php?email=$email");
        exit();
    } else {
        echo "خطأ: " . $conn->error;
    }
}
?>