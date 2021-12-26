<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
?>
<html>
<head> <title> Добавление нового автомобиля в наличие Efimov Ivan</title> </head>
<body>
<H2>Добавление нового автомобиля в наличие:</H2>
<form action="save_new.php" metod="get">
ID автомобиля:
<?php 
$sql = "SELECT auto_id,auto_mar,auto_model FROM Auto";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'id_auto'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['auto_id']."' >". $object['auto_mar']." ". $object['auto_model']."</option>";
}
echo "</select>";
?>
<br>ID салона: 
<?php 
$sql = "SELECT salon_id,salon_name FROM Auto_salon";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'id_salon'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['salon_id']."' >". $object['salon_name']."</option>";
}
echo "</select>";
?>
<br>Стоимость: <input name="sum" type="text">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=Наличие>
</form>
<p>
<a href="index.php"> Вернуться к списку </a>
</body>
</html>

