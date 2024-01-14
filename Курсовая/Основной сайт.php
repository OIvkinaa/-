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
            <li><a href="Услуги/услуги.php">Услуги</a></li>
            <li><a href="Галерея/Галерея.php">Галерея</a></li>
            <li><a href="Новости/Новости.php">Новости</a></li>
            <li><a href="Отзывы/Отзывы.php">Отзывы</a></li>
            <li><a href="Контакты/Контакты.php">Контакты</a></li>
        </nav>
    </header>
<br>
<br>
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
    <div>
			<form action="login.php" method="POST">	
			<h2>Авторизация</h2><br>
				<div class="form-group">
					<label>Номер телефона</label>
					<input type="tel" class="form-control" name="tel" />
				</div>
				<div class="form-group">
					<label>Пароль</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Войти</button>
				</div>
				<br><br>
				<a href="Регистрация.php">Зарегистрироваться</a><br><br>
				<a href="Администрация.php">Войти от имени администратора</a>
			</form>
		</div>
	</div>
</body>
</html>
    
 





















