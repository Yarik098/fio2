<?php
require_once 'connect.php';
$Type = $_POST['type'];
$Naming = $_POST['naming'];

if ($Type === 'name') {
	$sql = "INSERT INTO name (name) VALUES ('$Naming')";
} else if ($Type === 'surname') {
	$sql = "INSERT INTO surname (surname) VALUES ('$Naming')";
} else {
	$sql = "INSERT INTO patronymic (patronymic) VALUES ('$Naming')";
}

if ($connect->query($sql) === TRUE) {
	header('Location: /');
} else {
	echo "Error: " . $sql . "<br>" . $connect->error;
}
?>