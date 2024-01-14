<?php
session_start();
include ('bd.php');
$id = $_GET["id"];
        $stmt = $bd->query("DELETE FROM `user` WHERE `user`.`id` = $id");
            header('Location: Редакция.php');
    
?>