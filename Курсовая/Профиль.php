<!DOCTYPE html>
<?php
	require 'bd.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
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
    <div class="container">
        <div class="container">
            <img src="сайт.jpg" alt="Главная картинка">
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br />
			<?php
				$id = $_SESSION['user'];
				$sql = $bd->prepare("SELECT * FROM `user` WHERE `id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>

			<form action="" method="POST">
<div class="form-group">
    <input type="text" class="form-control" name="names" value="<?=$fetch['names']?>" require>
</div>
<div class="form-group">
    <input type="tel" class="form-control" name="tel" value="<?=$fetch['tel']?>" require>
</div>
<div class="form-group">
    <input type="password" class="form-control" name="password" value="" require>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary form-control" name="sub" value="Сохранить">
</div>
</form>
<?php
if(isset($_POST["sub"])){
$edit_user = array(
"names" => $_POST["names"],
"tel" => $_POST["tel"],
"password" => $_POST["password"]
);
$stmt = $bd->query("UPDATE user 
SET names='".$edit_user["names"]."',
  tel='".$edit_user["tel"]."',
  password='".$edit_user["password"]."'
   WHERE id =".$fetch['id']);

}
?>
			
			<a href = "выход.php">Выйти</a>
		</div>
	</div>
</body>
</html>

    