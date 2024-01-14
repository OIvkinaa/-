<Doctype html>
<?php
	require 'bd.php';
	session_start();
	
	if(!ISSET($_SESSION['admin'])){
		header('location:Администрация.php');
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
<?php
$stmt = $bd->query('SELECT * FROM user');
$stmt->setFetchMode(PDO::FETCH_ASSOC); 
?>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1">
<?php while($row = $stmt->fetch()):?>
<tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["names"]?></td>
    <td><?php echo $row["tel"]?></td>
    <td><a href="ред.php?id=<?=$row['id']?>">Редактировать</a></td>
    <td><a href="удалить.php?id=<?=$row['id']?>">Удалить</a></td>
</tr>
 <?php endwhile;?>
</table>
<a href="добавить.php">Добавить пользователя</a>
<br>
<br>
<a href = "выход.php">Выйти</a>

</body>
    </html>
