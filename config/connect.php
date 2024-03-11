<?php

//Получаем данные про БД MySql

$host = 'localhost';
$root = 'root';
$dbPass = '';
$db = 'fio';

// Создаем переменную для SQL запроса

$connect = mysqli_connect($host, $root, $dbPass, $db);

// Делаем кодировку `utf8mb4`

$connect->set_charset("utf8mb4");

// Создаем проверку на подключение

if (!$connect) {
	die('Error connect to DataBase');
}