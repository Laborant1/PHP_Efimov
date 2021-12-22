<html> <body>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");

switch($_GET['typeof']){
   case 'auto':  {
$zapros="UPDATE Auto SET auto_mar='".$_GET['mar'].
"', auto_model='".$_GET['model']."', auto_date='"
.$_GET['date']."', auto_trans='".$_GET['trans'].
"', auto_ob='".$_GET['ob']."', auto_sum='".$_GET['sum'].
"' WHERE auto_id="
.$_GET['id']; break;}
    
}
mysqli_query($link,$zapros);
if (mysqli_affected_rows($link)>0) {
echo 'Все сохранено. <a href="index.php"> Вернуться к списку
автомобилей </a>'; }
else { echo 'Ошибка сохранения.<a href="index.php">
Вернуться к списку автомобилей</a> ';
echo ('ID'.$_GET['id'].mysqli_affected_rows($link)); }
?>
</body> </html>


