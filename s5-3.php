<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["number"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "even":
            echo getNumbersByOperation($n, 'isEven');
            break;
        case "odd":
            echo getNumbersByOperation($n, 'isOdd');
            break;
        case "prime":
            echo getNumbersByOperation($n, 'isPrime');
            break;
        case "composite":
            echo getNumbersByOperation($n, 'isComposite');
            break;
        default:
            echo "Неверная операция.";
            break;
    }
}

function getNumbersByOperation($n, $operation) {
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        if (call_user_func($operation, $i)) {
            $result[] = $i;
        }
    }
    return implode(', ', $result);
}

function isEven($number) {
    return $number % 2 == 0;
}

function isOdd($number) {
    return $number % 2 != 0;
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function isComposite($number) {
    return !isPrime($number);
}
?>
