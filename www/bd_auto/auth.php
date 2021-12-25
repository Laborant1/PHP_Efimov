<?php
session_start();

if ($_SESSION['admin']) {
    header('Location: index.php');
}
if ($_SESSION['user']) {
    header('Location: operator/index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Efimov Ivan</title>
</head>
<body>
    <!-- Форма авторизации -->
    <form method="post" action="config.php">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <button type="submit">Войти</button>
    </form>
<p>Список логинов и паролей:
log - admin; pass - 555 ||
log - operator; pass - 123 ||
log - operator2; pass - 321 ||
</p>

<p> <a href="/index.php"> На главную </a>
</body>
</html>
