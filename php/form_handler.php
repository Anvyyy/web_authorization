<?php
require_once "db.php";
require_once "check_data.php";

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_EMAIL);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_SPECIAL_CHARS);

$check_login = check($login);
$check_pass = check($pass);

if (mb_strlen($login) < 6 || mb_strlen($login) > 50) {
    echo ("Недопустимая длинна логина");
    exit();
} elseif (mb_strlen($pass) < 6 || mb_strlen($pass) > 50) {
    echo ("Недопустимая длинна пароля");
    exit();
}

if ($check_pass != $pass) {
    echo "Были найдены запрещенные символы поменяйте пароль";
    exit();
} elseif ($check_login != $login) {
    echo "Были найдены запрещенные символы поменяйте логин";
    exit();
}

$pass = password_hash($pass, PASSWORD_DEFAULT);

$conn->query("INSERT INTO `users` (`login`, `pass`) VALUES ('$login', '$pass')");

header('Location: /web_%20authorization/');
