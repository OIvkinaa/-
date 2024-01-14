<?php
	$bd = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
	if(!$bd){
		die("Fatal Error: Connection Failed!");
	}
?>