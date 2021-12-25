<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<html>
<head> <title> Добавление нового автомобиля Efimov Ivan</title> </head>
<body>
<H2>Добавление автомобиля:</H2>
<form action="save_new.php" metod="get">
Марка: <input name="mar" size="20" type="text">
<br>Модель: <input name="model" size="20" type="text">
<br>Год выпуска: <input name="date" type="date">
<br>Трансмиссия: <input name="trans" size="20" type="text">
<br>Объем выпуска: <input name="ob" size="20" type="text">
<br>Стоимость: <input name="sum" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=Автомобиль>
</form>
<p>
<a href="index.php"> Вернуться к списку автомобилей </a>
</body>
</html>
