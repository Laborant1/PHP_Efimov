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
<title> Редактирование данных о наличии автомобилей в автосалоне </title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
$rows=mysqli_query($link,"SELECT nal_id_auto, nal_id_salon, nal_sum FROM Auto_nal WHERE
nal_id=".$_GET['nal_id']);
while ($st = mysqli_fetch_assoc($rows)) {
$id=$_GET['nal_id'];
$id_auto=$st['nal_id_auto'];
$id_salon = $st['nal_id_salon'];
$sum = $st['nal_sum'];
}
print "<form action='save_edit.php' metod='get'>";
$sql = "SELECT auto_id,auto_mar,auto_model FROM Auto";
$result_select = mysqli_query($link,$sql);
echo "<br>ID автомобиля: <select name = 'id_auto'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['auto_id']."' >". $object['auto_mar']." ". $object['auto_model']."</option>";
}
echo "</select>";
 
$sql = "SELECT salon_id,salon_name FROM Auto_salon";
$result_select = mysqli_query($link,$sql);
echo "<br>ID салона: <select name = 'id_salon'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['salon_id']."' >". $object['salon_name']."</option>";
}
echo "</select>";
print "<br>Стоимость: <input name='sum' type='text'
value='".$sum."'>";

print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typeof' value=auto_nal>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку </a>";
?>
</body>
</html>

