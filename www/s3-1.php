<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php
    if ($_POST["num1"] > $_POST["num2"]) {
        echo ("Наибольшим числом является " . $_POST["num1"]);
    } else if ($_POST["num1"] < $_POST["num2"]) {
        echo ("Наибольшим числом является " . $_POST["num2"]);
    } else {
        echo ("Числа равны");
    }
?>