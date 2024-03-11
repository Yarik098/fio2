<?php

//Удаление таблицы

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID и тип таблицы из адресной строки
 */

$id = $_GET['id'];
$group = $_GET['group'];

/*
 * Делаем запрос на удаление строки из таблицы name
 */

mysqli_query($connect, "DELETE FROM `$group` WHERE `$group`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /');

/*
 * Закрываем связь с БД
 */

$connect->close();