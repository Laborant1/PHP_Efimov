
<html>
<head> <title> Добавление нового автомобиля в наличие Efimov Ivan</title> </head>
<body>
<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
?>
<H2>Добавление нового автомобиля в наличие:</H2>
<form action="save_new.php" metod="get">
ID автомобиля: <input name="id_auto" size="20" type="text">
<br>ID салона: <input name="id_salon" size="20" type="text">
<br>Стоимость: <input name="sum" type="text">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=Наличие>
</form>
<p>
<a href="index.php"> Вернуться к списку </a>
</body>
</html>
