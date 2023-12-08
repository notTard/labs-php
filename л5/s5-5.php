<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $points = 0;

    $questions = [
        "q1" => 1, "q2" => 1, "q3" => 1, "q4" => 1, "q5" => 1,
        "q6" => 1, "q7" => 1, "q8" => 1, "q9" => 1, "q10" => 1,
        "q11" => -1, "q12" => -1, "q13" => 1, "q14" => 1, "q15" => -1,
        "q16" => -1, "q17" => -1, "q18" => -1, "q19" => 1
    ];

    foreach ($questions as $question => $value) {
        if (isset($_POST[$question]) && $_POST[$question] == "no") {
            $points += $value;
        }
    }

    $result = getResultPhrase($points);

    echo "Имя: $name<br>";
    echo "Результат: $result";
}

function getResultPhrase($points) {
    if ($points > 15) {
        return "У Вас покладистый характер";
    } elseif ($points >= 8 && $points <= 15) {
        return "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        return "Вашим друзьям можно посочувствовать";
    }
}
?>
