<html>
<head><title>Efimov Ivan</title></head>
</html>
<p>Вариант 4
<p>  
   <?php
$text = str_replace($_POST["symbol_1"], $_POST["symbol_2"], $_POST["predl"]);
echo "Вывод " . $text;
?>