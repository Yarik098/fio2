<?php
require_once 'connect.php';

$count_sql = "SELECT COUNT(id) as count FROM name";
$count_result = $connect->query($count_sql);
$count_row = $count_result->fetch_assoc();
$count = $count_row["count"];

$Maxsql = "SELECT MAX(id) AS max_id FROM (SELECT id FROM name UNION SELECT id FROM surname UNION SELECT id FROM patronymic) AS ids";
$Maxresult = $connect->query($Maxsql);

if ($Maxresult->num_rows > 0) {
	$row = $Maxresult->fetch_assoc();
	$max_id = $row["max_id"];
}

$prevName = "SELECT id, name, frequency FROM name";
$prevPatronymic = "SELECT id, patronymic, frequency FROM patronymic";
$prevSurname = "SELECT id, surname, frequency FROM surname";
$resultName = $connect->query($prevName);
$resultPatronymic = $connect->query($prevPatronymic);
$resultSurname = $connect->query($prevSurname);
$current_id = 1;