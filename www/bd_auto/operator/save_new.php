<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
<?php
// Подключение к базе данных:
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8'); // Тип кодировки
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:

 switch ($_GET['type']){
  case 'Автомобиль':{
$sql_add = "INSERT INTO Auto SET auto_mar='" . $_GET['mar']
."', auto_model='".$_GET['model']."', auto_date='".$_GET['date'].
"', auto_trans='".$_GET['trans']."', auto_ob='".$_GET['ob'].
"', auto_sum='".$_GET['sum']. "'"; break;
}

     case 'Автосалон':{
$sql_add = "INSERT INTO Auto_salon SET salon_name='" . $_GET['name']
."', salon_add='".$_GET['add']."'"; break;
}
         
    case 'Наличие':{
$sql_add = "INSERT INTO Auto_nal SET nal_id_auto='" . $_GET['id_auto']
."', nal_id_salon='".$_GET['id_salon']."', nal_sum='".$_GET['sum']."'"; break;
}
  
 }
mysqli_query($link,$sql_add); // Выполнение запроса
if (mysqli_affected_rows($link,)>0) // если нет ошибок при выполнении запроса
{ print "<p>Успешно сохранено.";
print "<p><a href=\"index.php\"> Вернуться к списку</a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку </a>"; }
?>
