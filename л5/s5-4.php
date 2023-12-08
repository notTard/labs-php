<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowedLogins = ['Ivan_php', 'Maria_php', 'Alex_php', 'Elena_php'];

    $userLogin = $_POST["login"];

    if (in_array($userLogin, $allowedLogins)) {
        echo "Здравствуйте, " . getUserName($userLogin) . "!";
    } else {
        echo "Вы не зарегистрированный пользователь!";
    }
}

function getUserName($login) {
    $userNames = [
        'Ivan_php' => 'Иванов Иван Иванович',
        'Maria_php' => 'Петрова Мария Александровна',
        'Alex_php' => 'Смирнов Алексей Викторович',
        'Elena_php' => 'Козлова Елена Игоревна'
    ];

    return $userNames[$login];
}
?>
