<html>
    <title>Efimov Ivan</title>
    <head></head>
    <body>
        <form method="POST" action="<?php print $PHP_SELF ?>">
            Login:
            <input type="text" name="login" size="10">
            <input type="hidden" name="login1" value="Efimov_php">
            <input type="hidden" name="login2" value="Mizulin_php">
            <input type="hidden" name="login3" value="Arshavin_php">
            <input type="hidden" name="login4" value="Banderas_php">
            <input type="submit" name="prov" value="Вход">       
        </form>

        <?php
            if (isset($_POST["login"])) {
            if ($_POST["login"] == $_POST["login1"]) {
                echo "Здравствуйте, Ефимов Иван Сергеевич!";
            } else if ($_POST["login"] == $_POST["login2"]) {
                echo "Здравствуйте, Мизулин Антон Валерьевич!";
            } else if ($_POST["login"] == $_POST["login3"]) {
                echo "Здравствуйте, Аршавин Андрей Сергеевич!";
            } else if ($_POST["login"] == $_POST["login4"]) {
                echo "Здравствуйте, Антонио Бандерас!";
            } else echo "Вы не зарегистрированный пользователь!";
        }
        ?>
    </body>
</html>