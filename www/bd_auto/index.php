<html>
<head> <title> Сведения о автомобилях Efimov Ivan </title> </head>
<body>
<?php
$link = mysqli_connect("localhost", "f0607139_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8'); // тип кодировки
// подключение к базе данных:
mysqli_select_db($link,"f0607139_automob") or die("Нет такой таблицы!");
?>
<h2>Содержащиеся в БД автомобили:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Марка </th> <th> Модель </th> <th> Год выпуска </th> <th> Трансмиссия </th> <th> Объем </th><th> Стоимость </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($link,"SELECT auto_id, auto_mar, auto_model, auto_date, auto_trans, auto_ob, auto_sum FROM Auto"); // запрос на выборку сведений о автомобилях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['auto_id'] . "</td>";
echo "<td>" . $row['auto_mar'] . "</td>";
echo "<td>" . $row['auto_model'] . "</td>";
echo "<td>" . $row['auto_date'] . "</td>";
echo "<td>" . $row['auto_trans'] . "</td>";
echo "<td>" . $row['auto_ob'] . "</td>";
echo "<td>" . $row['auto_sum'] . "</td>";
echo "<td><a href='edit.php?auto_id=" . $row['auto_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['auto_id']
. "&table=Auto&ni=auto_'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего автомобилей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить автомобиль </a>

<h2>Список автосалонов:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Название </th> <th> Адрес </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($link,"SELECT *
FROM Auto_salon"); // запрос на выборку сведений о салонах
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['salon_id'] . "</td>";
echo "<td>" . $row['salon_name'] . "</td>";
echo "<td>" . $row['salon_add'] . "</td>";
echo "<td><a href='edit_salon.php?salon_id=" . $row['salon_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['salon_id']
. "&table=Auto_salon&ni=salon_'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего салонов: $num_rows </p>");
?>
<p> <a href="new_salon.php"> Добавить салон </a>

<h2>Автомобили в наличии:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> ID автомобиля </th> <th> ID автосалона </th> <th> Стоимость </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($link,"SELECT *
FROM Auto_nal"); // запрос на выборку сведений о наличии автомобилей
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['nal_id'] . "</td>";
echo "<td>" . $row['nal_id_auto'] . "</td>";
echo "<td>" . $row['nal_id_salon'] . "</td>";
echo "<td>" . $row['nal_sum'] . "</td>";

echo "<td><a href='edit_nal.php?nal_id=" . $row['nal_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['nal_id']
. "&table=Auto_nal&ni=nal_'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<p> <a href="new_nal.php"> Добавить запись </a>
<p><a href="gen_pdf.php"> Скачать PDF </a><br><a href="gen_xls.php"> Скачать XLS </a><br>
</body> </html>
