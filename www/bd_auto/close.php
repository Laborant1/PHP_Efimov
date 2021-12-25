<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<?php 
session_start();//открытие сессии 
unset($_SESSION['admin']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
header("Location: auth.php");//Перенаправление на эту страницу после нажатия кнопки ВЫЙТИ 
?>
