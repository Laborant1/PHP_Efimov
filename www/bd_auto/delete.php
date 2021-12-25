<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
$zapros="DELETE FROM ".$_GET['table']." WHERE ".$_GET['ni']."id=" . $_GET['id'];
mysqli_query($link,$zapros);
header("Location:index.php");

exit;
?>