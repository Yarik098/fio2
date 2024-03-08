<?php
require_once '../config/connect.php';
$Type = $_POST['type'];
$Naming = $_POST['naming'];

if ($Type === 'name') {
	$table = 'name';
	$tableValue = 'name';
} else if ($Type === 'surname') {
	$table = 'surname';
	$tableValue = 'surname';
} else if ($Type === 'patronymic') {
	$table = 'patronymic';
	$tableValue = 'patronymic';
} else {
	header('Location: /');
}

mysqli_query($connect, "INSERT INTO `$table` (`id`, `$tableValue`, `frequency`) VALUES (NULL, '$Naming', NULL)");
header('Location: /');

$connect->close();
?>