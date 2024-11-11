<?php
// Получаем номер дня недели текущей даты (1 для понедельника, 7 для воскресенья)
$day = date('N');

// Определяем день недели с использованием switch
switch ($day) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье";
        break;
}

