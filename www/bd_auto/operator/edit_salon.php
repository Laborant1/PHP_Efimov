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
<title> Редактирование данных об автосалонах </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT salon_name, salon_add FROM Auto_salon WHERE
salon_id=".$_GET['salon_id']);
while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['salon_id'];
$name=$st['salon_name'];
$add = $st['salon_add'];
}
print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>Адрес: <input name='add' size='20' type='text'
value='".$add."'>";

print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=autosalon>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
автосалонов </a>";
?>
</body>
</html>

