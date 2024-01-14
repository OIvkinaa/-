<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Курсовая работа</title>
    <link rel=stylesheet type="text/css" href="normalize.css">
    <link rel=stylesheet type="text/css" href="style1.css">
</head>
<body>
    <header>
        <span class="logo">CarKey</span>
        <nav class="hMenu">
            <li><a href="#">Услуги</a></li>
            <li><a href="Галерея/Галерея.html">Галерея</a></li>
            <li><a href="Новости/Новости.html">Новости</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="Контакты/Контакты.html">Контакты</a></li>
        </nav>
    </header>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="container">
            <img src="сайт.jpg" alt="Главная картинка">
        </div>
<br>
<br>
<br>
<br>
<br>
<form action="register.php" method="POST">	
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>ФИО</label>
					<input type="text" class="form-control" name="names" require>
				</div>
				<div class="form-group">
					<label>Номер телефона</label>
					<input type="tel" class="form-control" name="tel" require>
				</div>
				<div class="form-group">
					<label>Пароль</label>
					<input type="password" class="form-control" name="password" require>
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Зарегистрироваться</button>
				</div>
				<a href="Основной сайт.php">Войти</a>
			</form>
</body>
</html>
    