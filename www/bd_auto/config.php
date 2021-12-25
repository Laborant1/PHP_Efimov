<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);
$error_fields = [];

$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
$check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    if ($user['type'] == 1){
    $_SESSION['user'] = [
        "id" => $user['id'],
    ];
    $_SESSION['logged in user id'] = $user['id'];
        header("Location: operator/index.php");
    }
    else {
       $_SESSION['admin'] = [
        "id" => $user['id'],
    ]; 
    header("Location: index.php");
    }
        
    $response = [
        "status" => true
    ];

    echo json_encode($response);
   
} else {
   { print "<p style='text-align:center'>Неверный логин/пароль.</p>";}
}
?>
<p> <a href="/index.php"> На главную </a>
