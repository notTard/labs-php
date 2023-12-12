<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Проверка ввода
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.";
    } else {
        // Выполняем выбранную операцию
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Нельзя делить на ноль.";
                    exit;
                }
                break;
            default:
                echo "Неверная операция";
                exit;
        }

        // Выводим результат
        echo "Result: $result";
    }
}
?>
