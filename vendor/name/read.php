<?php

/*
 * Делаем выборку всех строк из таблицы "items"
 */

$items = mysqli_query($connect, "SELECT * FROM `name`");

/*
 * Преобразовываем полученные данные в нормальный массив
 */

$items = mysqli_fetch_all($items);

/*
 * Перебираем массив и рендерим HTML с данными из массива
 * Ключ 0 - id
 * Ключ 1 - value
 * Ключ 2 - frequency
 */

$type = 'name';