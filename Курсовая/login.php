<?php
	session_start();
	require_once 'bd.php';

	if(ISSET($_POST['login'])){
        $tel = $_POST['tel'];
        $password = $_POST['password'];
		if($_POST['tel'] != "" || $_POST['password'] != ""){
			$query = $bd->prepare("SELECT * FROM user WHERE tel=? AND password=? ");
			$query->execute(array($tel,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['id'];
				header("location: Профиль.php");
			} else{
				echo "Неправильный логин или пароль";
			}
		}else{
			echo "Пожалуйста, заполните обязательные поля!";
		}
	}
?>