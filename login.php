<?php
$min  = 1;
$max  = 10;
$num1 = rand($min, $max);
$num2 = rand($min, $max);
require_once("db.php");


$email = $_POST['email'];
$pass = $_POST['pass'];
$number1 = $_POST['no1'];
$number2  = $_POST['no2'];
$test = $_POST["test"];
$total = $number1 + $number2;

if (empty($email) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM 'users' WHERE email = '$email' AND pass = '$pass'";
    $counter = $pdo->query("SELECT COUNT(*) FROM 'users' WHERE email = '$email' AND pass = '$pass'");
    $result = $pdo->query($sql);
    $countemail = $pdo->query("SELECT COUNT(*) FROM 'users' WHERE email = '$email'");
    $result_pass = $pdo->query("SELECT count(*) FROM 'users' WHERE email = '$email' AND pass != '$pass'");
    $counterrow = $counter->fetchColumn();
    $counterem = $countemail->fetchColumn();
    if ($counterrow === 1 && $total == $test) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "Добро пожаловать, " . $row['login'];
        }
    } elseif ($result_pass->fetchColumn() > 0) {
        echo "Пароль неверный";
    } elseif ($counterem === 0) {
        echo "Пользователь под таким email или телефоном не зарегистрирован";
    } elseif ($total !== $test) {
        echo "Cумма неверная";
    }
}
