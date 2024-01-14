
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- База данных
CREATE DATABASE IF NOT EXISTS test CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Таблица пользователей
CREATE TABLE `test`.`user` (
    `id` int(11)NOT NULL AUTO_INCREMENT ,
  `names` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel` decimal(20.0) ,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- Таблица администратора
CREATE TABLE `test`.`admin` (
`id` INT(11) NOT NULL AUTO_INCREMENT ,
 `login` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
 `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;
