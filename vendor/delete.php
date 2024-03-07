<?php

require_once 'connect.php';

$id = $_POST['id'];
echo $id;

$delName = "DELETE FROM name WHERE id = '$id'";
$delSurname = "DELETE FROM surname WHERE id = '$id'";
$delPatronymic = "DELETE FROM patronymic WHERE id = '$id'";

$connect->query($delName) === TRUE;
$connect->query($delSurname) === TRUE;
$connect->query($delPatronymic) === TRUE;

$connect->close();