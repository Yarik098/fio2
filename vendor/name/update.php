<?php
require_once '../../config/connect.php';

if (isset($_POST['id'], $_POST['naming'], $_POST['frequency'])) {
	$idEdit = mysqli_real_escape_string($connect, $_POST['id']);
	$namingEdit = mysqli_real_escape_string($connect, $_POST['naming']);
	$frequencyEdit = mysqli_real_escape_string($connect, $_POST['frequency']);

	$stmt = $connect->prepare("UPDATE `name` SET `name` = ?, `frequency` = ? WHERE `id` = ?");
	if ($stmt) {
		$stmt->bind_param("ssi", $namingEdit, $frequencyEdit, $idEdit);
		if ($stmt->execute()) {
			echo 'Обновление выполнено успешно';
			header("Location: /");
		} else {
			echo "Ошибка: " . $connect->error;
		}
		$stmt->close();
	} else {
		echo 'Ошибка подготовки запроса';
	}

} else {
	echo 'Не все необходимые данные были переданы через POST запрос';
}
?>