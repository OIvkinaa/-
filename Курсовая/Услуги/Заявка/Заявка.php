<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка</title>
        <link rel="stylesheet" href="style(заявка).css">
</head>


<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
        echo "<p>Вы оставили заявку!</p>";
    } else {
        echo "<p>Пожалуйста, заполните все поля формы.</p>";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="phone">
    <h2>Заявка</h2> <br>
    Номер телефона:</label>
    <input type="tel" name="phone" required><br>

    <label for="email">Почта:</label>
    <input type="email" name="email" required><br>

    <label for="comment">Напишите какую услугу вы хотите получить:</label><br>
    <input type="comment" name="comment" required><br>
    <input type="submit" value="Отправить заявку">
</form>


</body>
</html>
