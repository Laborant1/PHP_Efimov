<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<html>
<head> <title> Добавление нового автосалона Efimov Ivan</title> </head>
<body>
<H2>Добавление автосалона:</H2>
<form action="save_new.php" metod="get">
Название: <input name="name" size="20" type="text">
<br>Адрес: <input name="add" size="20" type="text">

<p><input name="add1" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=Автосалон>
</form>
<p>
<a href="index.php"> Вернуться к списку автосалонов </a>
</body>
</html>
