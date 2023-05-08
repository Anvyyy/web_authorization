<?php
require_once "db.php";
require_once "check_data.php";

session_start();

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_EMAIL); // фильтр формы
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_SPECIAL_CHARS);

// Задержка в 5 секунд между неудачными попытками входа
$delay = 5;

if (isset($_SESSION['last_failed_login_time'])) {
    $time_last_failed_login = time() - $_SESSION['last_failed_login_time'];
    if ($time_last_failed_login < $delay) {
        echo json_encode(['success' => false, 'error' => 'Подождите, прежде чем попробовать снова']);
        // exit();
    }
}

$check_login = check($login); // проверка на запрещенные символы xss и инъекций
$check_pass = check($pass);

$res = $conn->query("SELECT * FROM `users` WHERE `login` = '$login'"); // ищем пользователя по логину в базе данных
if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if (password_verify($pass, $row['pass'])) {
        echo json_encode(['success' => true]);
        unset($_SESSION['last_failed_login_time']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Неправильный пароль']);
        $_SESSION['last_failed_login_time'] = time();
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Пользователь не найден']);
    $_SESSION['last_failed_login_time'] = time();
}
