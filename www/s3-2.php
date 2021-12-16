<html>
    <title>Efimov Ivan</title>
    <head></head>
    <body>
        Калькулятор <br>
        <form method="post" action="<?php print $PHP_SELF ?>">
            <input type="number" name="num1"> <input type="number" name="num2"> <br>
            Действие: <br>
            <select name="z" size="1">
                <option value="1" selected> сложить
                <option value="2"> вычесть
                <option value="3"> умножить
                <option value="4"> разделить
            <input type="submit" name="prov" value="Посчитать">
        </form>

        <?php
            switch ($_POST["z"]){
                case 1:
                    $res = $_POST["num1"] + $_POST["num2"];
                    break;    
                case 2:
                    $res = $_POST["num1"] - $_POST["num2"];  
                    break;
                case 3:
                    $res = $_POST["num1"] * $_POST["num2"];  
                    break;
                case 4:
                    $res = $_POST["num1"] / $_POST["num2"];
                    $res = round($res, 2);  
                    break;
            }
            if ($res != null) {
            echo ("Результат вычислений равен " . $res);    
            }
        ?>
    </body>
</html>