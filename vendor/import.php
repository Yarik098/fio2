<?php
require_once '../config/connect.php';
require 'autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_FILES['file']['error'] == UPLOAD_ERR_OK && $_FILES['file']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
	$file = $_FILES['file']['tmp_name'];
	$Type = $_POST['type'];

	$spreadsheet = IOFactory::load($file);
	$sheet = $spreadsheet->getActiveSheet();
	$data = $sheet->toArray(null, true, true, true);

	foreach ($data as $row) {
		$name = $connect->real_escape_string($row['B']);
		$frequency = $connect->real_escape_string($row['C']);

		$sql = "INSERT INTO $Type ($Type, frequency) VALUES ('$name', '$frequency')";
		$connect->query($sql);
	}

	$connect->close();

	echo "Import successful";
} else {
	echo "Invalid file";
}