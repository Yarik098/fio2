<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru" class="page">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="theme-color" content="#111111" />
	<title>FIO</title>
	<link rel="preload" href="fonts/Inter-Black.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="fonts/Inter-Bold.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="fonts/Inter-Medium.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="stylesheet" href="css/vendor.css" />
	<link rel="stylesheet" href="css/main.css" />
	<script defer="defer" src="js/main.js"></script>
</head>

<body class="page__body">
	<div class="site-container">
		<div class="header__top">
			<div class="container header__top-inner">
				<a href="#" class="header__top-link"><img src="img/login.svg" alt="Иконка входа" class="image" width="32px"
						height="32px" />
					Войти</a>
			</div>
		</div>
		<header class="header">
			<div class="container">
				<div class="header__inner">
					<nav class="menu">
						<ul class="menu__list list-reset">
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Интерфейс
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Соц.сети
								</button>
							</li>
							<li class="menu__item js-menu-active-item">
								<button class="btn-reset menu__btn" type="button">
									Журналы
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Импорт
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Экспорт
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Пользователи
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Email ящики
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Ключи.Пароли
								</button>
							</li>
							<li class="menu__item">
								<button class="btn-reset menu__btn" type="button">
									Разное
								</button>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="dropdown">
			<div class="container dropdown__inner">
				<ul class="dropdown__list list-reset">
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-1.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Объявления</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-2.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Вакансии</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-3.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Соискатели</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-4.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Email Рассылка</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-5.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Отклики</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link js-active-dropdown-link" href="#"><img src="img/menu-6.png" alt="Иконка"
								class="image" width="50px" height="50px" />
							ФИО</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-7.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Адреса</a>
					</li>
					<li class="dropdown__item">
						<a class="dropdown__link" href="#"><img src="img/menu-8.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Компании</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-9.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Учебные заведения</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-10.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Сокр.Ю.Ф.</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-11.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Альтернативные</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-12.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Филиалы</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-13.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Квалификации</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-14.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Специальности</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-15.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Телефонные коды</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-16.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							Администраторы</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-17.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							email рассылка</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-18.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							КАК БЫЛО КАК НАДО</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-19.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							ПРЕФИКСЫ СЧЕТОВ</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-20.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							ПОИСК</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-21.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							БАНКИ</a>
					</li>
					<li class="dropdown__item js-dropdown-item">
						<a class="dropdown__link" href="#"><img src="img/menu-22.png" alt="Иконка" class="image" width="50px"
								height="50px" />
							РУБРИКАТОР</a>
					</li>
				</ul>
				<button class="btn-reset dropdown__btn" type="button" id="dropdownBtn">
					Все 22 Журнала
					<img src="img/arrow.svg" alt="Иконка стрелки вниз" class="image" width="12px" height="6px" />
				</button>
			</div>
		</div>
		<main class="main">
			<section class="nav">
				<div class="container">
					<div class="nav__inner">
						<ul class="nav__list list-reset">
							<li class="nav__item">
								<button class="btn-reset nav__btn" type="button" data-graph-path="ADDANEWONE">
									+ ADD A NEW ONE
								</button>
							</li>
							<li class="nav__item">
								<img src="img/check.svg" alt="Иконка галочки" class="image" width="24px" height="24px" />
								<span class="nav__text">Всего Имён: <span class="fragment">
										<?php echo $name_count; ?>
									</span></span>
							</li>
							<li class="nav__item">
								<img src="img/check.svg" alt="Иконка галочки" class="image" width="24px" height="24px" />
								<span class="nav__text">Всего Отчеств: <span class="fragment">
										<?php echo $patronymic_count; ?>
									</span></span>
							</li>
							<li class="nav__item">
								<img src="img/check.svg" alt="Иконка галочки" class="image" width="24px" height="24px" />
								<span class="nav__text">Всего Фамилий: <span class="fragment">
										<?php echo $surname_count; ?>
									</span></span>
							</li>
							<li class="nav__item">
								<button class="btn-reset nav__btn" type="button">
									<img src="img/deselect.svg" alt="Иконка красного крестика" class="image" width="20px" height="20px" />
									<span class="nav__text">DESELECT</span>
								</button>
							</li>
							<li class="nav__item">
								<button class="btn-reset nav__btn" type="button">
									<img src="img/import.svg" alt="Иконка Импорта" class="image" width="24px" height="24px" />
									IMPORT
								</button>
							</li>
							<li class="nav__item">
								<button class="btn-reset nav__btn" type="button">
									<img src="img/export.svg" alt="Иконка Экспорта" class="image" width="24px" height="24px" />
									EXPORT
								</button>
							</li>
						</ul>
						<div class="nav__bottom">
							<div class="go">
								<span class="go__text">Укажите страницу</span>
								<div class="go__content">
									<input class="input-reset go__input" type="number" name="goNumber" id="goNumber" />
									<button class="btn-reset go__btn" type="submit">Go</button>
								</div>
							</div>
							<div class="page__nav">
								<div class="page__nav-item">
									<button class="btn-reset page__nav-btn" type="button">
										<svg class="page__btn-icon" width="26px" height="26px">
											<use xlink:href="img/sprite.svg#prev"></use>
										</svg>
									</button>
								</div>
								<div class="page__nav-item">
									<button class="btn-reset page__nav-btn" type="button">
										First
									</button>
								</div>
								<div class="page__nav-item next page-checked">
									<button class="btn-reset page__nav-btn" type="button">
										1
									</button>
								</div>
								<div class="page__nav-item next">
									<button class="btn-reset page__nav-btn" type="button">
										2
									</button>
								</div>
								<div class="page__nav-item next">
									<button class="btn-reset page__nav-btn" type="button">
										3
									</button>
								</div>
								<div class="page__nav-item next">
									<button class="btn-reset page__nav-btn page-special" type="button">
										Last
									</button>
								</div>
								<div class="page__nav-item next">
									<button class="btn-reset page__nav-btn" type="button">
										<svg class="page__nav-btn-icon" width="26px" height="26px">
											<use xlink:href="img/sprite.svg#next"></use>
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="table">
				<div class="container">
					<div class="table__inner">
						<div class="table__title">Журнал ФИО</div>
						<div class="table__group">
							<table class="table__content">
								<tr class="table__row">
									<th class="table__head">
										<span class="table__span">№</span>
									</th>
									<th class="table__head">
										<span class="table__span">Имена</span>
									</th>
									<th class="table__head">
										<span class="table__span">Частота</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">ID </span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Edit</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Del</span>
									</th>
								</tr>
								<tr class="table__row">
									<td class="table__col"></td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col"></td>
									<td class="table__col"></td>
									<td class="table__col"></td>
								</tr>
								<?php
								require_once 'vendor/name/read.php';
								foreach ($items as $itemName) {
									?>
									<tr class='table__row'>
										<td class='table__col'><span class='table__text'>
												<?= $itemName[0] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemName[1] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemName[2] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemName[0] ?>
											</span></td>
										<td class='table__col'>
											<button class='btn-reset table__btn' type='button' data-graph-path='EDITNAME'> <img
													src='img/edit.svg' alt='Иконка редактирование' class='image' width='18px' />
											</button>
										</td>
										<td class='table__col'>
											<a href="vendor/delete.php?id=<?= $itemName[0] ?>&group=<?= $type ?>" class='table__btn'
												type='button'>
												<img src='img/del.svg' alt='Иконка удаление' class='image' width='18px' />
											</a>
										</td>
									</tr>
									<?php
								}
								?>
							</table>
							<table class="table__content">
								<tr class="table__row">
									<th class="table__head">
										<span class="table__span">Отчества</span>
									</th>
									<th class="table__head">
										<span class="table__span">Частота</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">ID </span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Edit</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Del</span>
									</th>
								</tr>
								<tr class="table__row">
									<td class="table__col"></td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col"></td>
									<td class="table__col"></td>
								</tr>
								<?php
								require_once 'vendor/patronymic/read.php';
								foreach ($items as $itemPatronymic) {
									?>
									<tr class='table__row'>
										<td class='table__col'><span class='table__text'>
												<?= $itemPatronymic[1] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemPatronymic[2] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemPatronymic[0] ?>
											</span></td>
										<td class='table__col'>
											<button class='btn-reset table__btn' type='button' data-graph-path='EDITPATRONYMIC'>
												<img src='img/edit.svg' alt='Иконка редактирование' class='image' width='18px' />
											</button>
										</td>
										<td class='table__col'>
											<a href="vendor/delete.php?id=<?= $itemPatronymic[0] ?>&group=<?= $type ?>" class='table__btn'
												type='button'>
												<img src='img/del.svg' alt='Иконка удаление' class='image' width='18px' />
											</a>
										</td>
									</tr>
									<?php
								}
								?>
							</table>
							<table class="table__content">
								<tr class="table__row">
									<th class="table__head">
										<span class="table__span">Фамилии</span>
									</th>
									<th class="table__head">
										<span class="table__span">Частота</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">ID </span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Edit</span>
									</th>
									<th class="table__head table-width-fixed">
										<span class="table__span">Del</span>
									</th>
								</tr>
								<tr class="table__row">
									<td class="table__col"></td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col">
										<svg class="table__search" width="15px" height="15px">
											<use xlink:href="img/sprite.svg#search"></use>
										</svg>
									</td>
									<td class="table__col"></td>
									<td class="table__col"></td>
								</tr>
								<?php
								require_once 'vendor/surname/read.php';
								foreach ($items as $itemSurname) {
									?>
									<tr class='table__row'>
										<td class='table__col'><span class='table__text'>
												<?= $itemSurname[1] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemSurname[2] ?>
											</span></td>
										<td class='table__col'><span class='table__text'>
												<?= $itemSurname[0] ?>
											</span></td>
										<td class='table__col'>
											<button class='btn-reset table__btn' type='button' data-graph-path='EDITSURNAME'>
												<img src='img/edit.svg' alt='Иконка редактирование' class='image' width='18px' />
											</button>
										</td>
										<td class='table__col'>
											<a href="vendor/delete.php?id=<?= $itemSurname[0] ?>&group=<?= $type ?>" class='table__btn'
												type='button'>
												<img src='img/del.svg' alt='Иконка удаление' class='image' width='18px' />
											</a>
										</td>
									</tr>
									<?php
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</section>
			<div class="graph-modal">
				<div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="EDITNAME">
					<button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
					<div class="graph-modal__content modal">
						<div class="modal__head">
							<span class="modal__name">Редактировать Имя</span>
						</div>
						<form action="vendor/name/update.php" method='post' class="modal__form">
							<label class="modal__label"><span class="modal__text">Наименование</span>
								<input type="text" name="naming" class="input-reset modal__input" value='<?= $itemName[1] ?>' /></label>
							<label class="modal__label"><span class="modal__text">Частота</span>
								<input type="text" name="frequency" class="input-reset modal__input"
									value='<?= $itemName[2] ?>' /></label>
							<input type="hidden" name="id" value='<?= $itemName[0] ?>'>
							<div class="modal__bottom">
								<button class="btn-reset modal__btn" type="submit">
									Сохранить
								</button>
								<button class="btn-reset modal__btn cancel js-modal-close" type="button">
									Отмена
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="EDITPATRONYMIC">
					<button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
					<div class="graph-modal__content modal">
						<div class="modal__head">
							<span class="modal__name">Редактировать Отчества</span>
						</div>
						<form action="vendor/patronymic/update.php" method='post' class="modal__form">
							<label class="modal__label"><span class="modal__text">Наименование</span>
								<input type="text" name="naming" class="input-reset modal__input"
									value='<?= $itemPatronymic[1] ?>' /></label>
							<label class="modal__label"><span class="modal__text">Частота</span>
								<input type="text" name="frequency" class="input-reset modal__input"
									value='<?= $itemPatronymic[2] ?>' /></label>
							<input type="hidden" name="id" value='<?= $itemPatronymic[0] ?>'>
							<div class="modal__bottom">
								<button class="btn-reset modal__btn" type="submit">
									Сохранить
								</button>
								<button class="btn-reset modal__btn cancel js-modal-close" type="button">
									Отмена
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="EDITSURNAME">
					<button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
					<div class="graph-modal__content modal">
						<div class="modal__head">
							<span class="modal__name">Редактировать Фамилия</span>
						</div>
						<form action="vendor/surname/update.php" method='post' class="modal__form">
							<label class="modal__label"><span class="modal__text">Наименование</span>
								<input type="text" name="naming" class="input-reset modal__input"
									value='<?= $itemSurname[1] ?>' /></label>
							<label class="modal__label"><span class="modal__text">Частота</span>
								<input type="text" name="frequency" class="input-reset modal__input"
									value='<?= $itemSurname[2] ?>' /></label>
							<input type="hidden" name="id" value='<?= $itemSurname[0] ?>'>
							<div class="modal__bottom">
								<button class="btn-reset modal__btn" type="submit">
									Сохранить
								</button>
								<button class="btn-reset modal__btn cancel js-modal-close" type="button">
									Отмена
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="ADDANEWONE">
					<button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
					<div class="graph-modal__content modal">
						<div class="modal__head">
							<span class="modal__name">Добавить ФИО</span>
						</div>
						<form action="vendor/add.php" method='post' class="modal__form">
							<label class="modal__label"><span class="modal__text">Выберите тип</span>
								<div class="modal__content">
									<div class="modal__item js-modal-item" data-item="name">
										<span class="modal__item-text">Имя</span>
									</div>
									<div class="modal__item" data-item="patronymic">
										<span class="modal__item-text">Отчества</span>
									</div>
									<div class="modal__item" data-item="surname">
										<span class="modal__item-text">Фамилия</span>
									</div>
									<input type="hidden" name="type" class='js-hidden-input' value='name' />
								</div>
							</label>
							<label class="modal__label"><span class="modal__text">Наименование</span>
								<input oninput='displayResults()' type="text" name="naming" id="naming"
									class="input-reset modal__input" /></label>
							<div id="resultContainer"></div>
							<div class="modal__bottom">
								<button class="btn-reset modal__btn" type="submit" id='addSubmit'>
									Добавить
								</button>
								<button class="btn-reset modal__btn cancel js-modal-close" type="button">
									Отмена
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>

</html>