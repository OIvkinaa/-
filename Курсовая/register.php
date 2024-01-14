<?php
	session_start();
	require_once 'bd.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['tel'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['names'];
				$phone = $_POST['tel'];
				$password = $_POST['password'];
				$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$bd->exec("INSERT INTO `user` VALUES ('', '$firstname', '$phone', '$password')");
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			header('location:Основной сайт.php');
		}else{
			echo "Пожалуйста повторите попытку регистрации";
		}
	}
?>