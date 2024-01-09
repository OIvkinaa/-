<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
        <link rel="stylesheet" href="style.css">
</head>


<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['full_name']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['dob'])) {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        echo "<p>Вы зарегистрированы!</p>";
    } else {
        echo "<p>Пожалуйста, заполните все поля формы.</p>";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="full_name">
    <h2>Регистрация</h2> <br>
    ФИО:</label>
    <input type="text" name="full_name" required><br>

    <label for="username">Логин:</label>
    <input type="text" name="username" required><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" required><br>

    <label for="dob">Дата рождения:</label>
    <input type="date" name="dob" required><br>

    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>
