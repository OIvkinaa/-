<?php
	session_start();
	require_once 'bd.php';
	if(ISSET($_POST['log'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
		if($_POST['login'] != "" || $_POST['password'] != ""){
			$query = $bd->prepare("SELECT * FROM admin WHERE login=? AND password=?");
			$query->execute(array($login,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['admin'] = $fetch['id'];
				header("location: Редакция.php");
			} else{
				echo "Неправильный логин или пароль";
			}
		}else{
			echo "Пожалуйста, заполните обязательные поля!";
		}
	}
?>