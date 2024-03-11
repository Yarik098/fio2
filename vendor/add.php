<?php

// Подключение к БД
require_once '../config/connect.php';



// Получаем из формы данные
$Type = $_POST['type'];
$Naming = $_POST['naming'];



// SQL запрос чтобы вставить данные в БД
mysqli_query($connect, "INSERT INTO `$Type` (`id`, `$Type`, `frequency`, `date`, `time`) VALUES (NULL, '$Naming', NULL, CURDATE(), DATE_FORMAT(NOW(), '%H:%i:%s'))");



// Переадресация на главную страницу
header('Location: /');



// Закрываем связь с БД
$connect->close();
?>