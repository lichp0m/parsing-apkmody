<?php

include "simple_html_dom.php";
$html = file_get_html('https://apkmody.io/games/west-gunfighter'); // Получаю html-код

$th = ''; // Первый цикл собирает в переменную ключи будущего массива (название, категория и так далее)
$i = 0;
while ($i < 9) {
    $th = "{$th}{$html->find('th', $i)->plaintext}\n";
    $i++;
}
$th = explode("\n", $th); // Преобразую строки в массив

$td = ''; // Второй цикл собирает в переменную значения для будущего массива (West Gunfighter, Action и так далее)
$i = 0;
while ($i < 9) {
    $td = "{$td}{$html->find('td', $i)->plaintext}\n";
    $i++;
}
$td = explode("\n", $td); // Преобразую строки в массив

$post = array_combine($th, $td); // Собираю новый массив из значений предыдущих двух
echo $post['Name']; // Получаю значение по нужному ключу