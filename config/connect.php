<?php

$host = 'localhost';
$root = 'root';
$dbPass = '';
$db = 'fio';

$connect = mysqli_connect($host, $root, $dbPass, $db);

$connect->set_charset("utf8mb4");

if (!$connect) {
	die('Error connect to DataBase');
}