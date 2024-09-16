<?php
require_once("db.php");

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        $sql = "SELECT * FROM 'users' WHERE email = '$email'";
        $sqllogin = "SELECT * FROM 'users' WHERE login = '$login'";
        $counter = $pdo->query("SELECT COUNT(*) FROM 'users' WHERE email = '$email'");
        $countlogin = $pdo->query("SELECT COUNT(*) FROM 'users' WHERE login = '$login'");
        $result = $pdo->query($sql);
        $counterrow = $counter->fetchColumn();
        $counterlogin = $countlogin->fetchColumn();
        if ($counterrow > 0) {

            echo "Вы уже регистрировались по таким email - " . $email;
        } elseif ($counterlogin > 0) {
            echo "Логин " . $login . " уже занят";
        } elseif ($counterrow === 0 && $counterlogin === 0) {


            $sqladd = "INSERT INTO 'users' (login, pass, email) VALUES ('$login', '$pass', '$email')";
            if ($pdo->query($sqladd)) {
                echo "Успешная регистрация";
            } else {
                echo "Ошибка";
            }
        }
    }
}
