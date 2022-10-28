<?php

include "simple_html_dom.php";

$html = file_get_html('https://apkmody.io/games/west-gunfighter'); // Получаю html-код

$th = array();
for ($i=0; $i < 9; $i++) {
    $th[] = $html->find('th', $i)->plaintext; // Получаю массив из <th>
}

$td = array();
for ($i = 0; $i < 9; $i++) {
    $td[] = $html->find('td', $i)->plaintext; // Получаю массив из <td>
}

$post = array_combine($th, $td); // Собираю новый массив из значений предыдущих двух
print_r($post['Version']); // Получаю значение по нужному ключу
