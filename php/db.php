<?php

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "auth";

// создаем новый объект mysqli
$conn = new mysqli($host, $user, $password, $dbname);

// проверяем, удалось ли подключение к базе данных
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
