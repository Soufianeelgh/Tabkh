<?php
$email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدفع</title>
</head>
<body>
    <h2>إتمام الدفع</h2>
    <p>يرجى دفع 0.5 دولار عبر PayPal:</p>
    <form action="confirm_payment.php" method="POST">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <button type="submit">تأكيد الدفع</button>
    </form>
</body>
</html>