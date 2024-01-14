<?php
	session_start();
	session_destroy();
	header('location: Основной сайт.php');
?>