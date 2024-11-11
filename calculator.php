<?php
// Получаем значения из формы
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

// Выполняем операцию на основе значения оператора
switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Ошибка: деление на ноль";
        }
        break;
    default:
        $result = "Неверный оператор";
}

// Возвращаем результат
echo "Результат: $result";

