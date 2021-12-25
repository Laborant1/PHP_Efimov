<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
<html>
<head
<title> Редактирование данных о автомобиле </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT auto_mar, auto_model, auto_date, auto_trans, auto_ob, auto_sum FROM Auto WHERE
auto_id=".$_GET['auto_id']);
while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['auto_id'];
$mar=$st['auto_mar'];
$model = $st['auto_model'];
$date = $st['auto_date'];
$trans = $st['auto_trans'];
$ob = $st['auto_ob'];
$sum = $st['auto_sum'];
}
print "<form action='save_edit.php' metod='get'>";
print "Марка: <input name='mar' size='20' type='text'
value='".$mar."'>";
print "<br>Модель: <input name='model' size='20' type='text'
value='".$model."'>";
print "<br>Год выпуска: <input name='date' type='date'
value='".$date."'>";
print "<br>Трансмиссия: <input name='trans' size='20' type='text'
value='".$trans."'>";
print "<br>Объем выпуска: <input name='ob' size='20' type='text' value='".$ob."'>";
print "<br>Стоимость: <input name='sum' size='20' type='text' value='".$sum."'>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=auto>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
автомобилей </a>";
?>
</body>
</html>

