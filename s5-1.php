<?php
// s5-1.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенные пользователем числа
    $number1 = isset($_POST["number1"]) ? $_POST["number1"] : null;
    $number2 = isset($_POST["number2"]) ? $_POST["number2"] : null;

    // Проверяем, что числа были введены
    if (!is_null($number1) && !is_null($number2)) {
        // Сравниваем числа и выводим результат
        if ($number1 > $number2) {
            echo "Большее число: $number1";
        } elseif ($number1 < $number2) {
            echo "Большее число: $number2";
        } else {
            echo "Числа равны";
        }
    } else {
        echo "Введите оба числа";
    }
} else {
    // Если скрипт вызван не через POST-запрос, выводим сообщение
    echo "Данный скрипт предназначен для обработки формы и должен вызываться методом POST.";
}
?>
