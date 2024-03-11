<?php

require_once '../config/connect.php';
require 'autoload.php';
$Type = $_POST['type'];

if ($Type === 'name') {
	$head = 'Имя';
} else if ($Type === 'surname') {
	$head = 'Фамилия';
} else {
	$head = 'Отчества';
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Получение данных из базы данных
$sql = "SELECT $Type, date, time FROM $Type";
$result = $connect->query($sql);

// Создание новой книги Excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Установка шапки таблицы
$sheet->setCellValue('A1', $head);
$sheet->setCellValue('B1', 'Дата');
$sheet->setCellValue('C1', 'Время');

// Заполнение таблицы данными из базы данных
if ($result->num_rows > 0) {
	$rowNumber = 2;
	while ($row = $result->fetch_assoc()) {
		$sheet->setCellValue('A' . $rowNumber, $row['name']);
		$sheet->setCellValue('B' . $rowNumber, $row['date']);
		$sheet->setCellValue('C' . $rowNumber, $row['time']);
		$rowNumber++;
	}
}

// Задаем имя файла для скачивания
$filename = isset($_POST['Filenaming']) ? $_POST['Filenaming'] : 'export';

// Создаем объект для записи в файл
$writer = new Xlsx($spreadsheet);

// Устанавливаем заголовки для скачивания файла
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
header('Cache-Control: max-age=0');

// Записываем данные в файл
$writer->save('php://output');

// Закрываем соединение с базой данных
$connect->close();