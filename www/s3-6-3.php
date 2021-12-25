<html>
<head><title>Efimov Ivan</title></head>
</html>
<p>Вариант 6
<p> 
 <?php
    if (isset($_POST["text1"])){
        $char = array("а", "е", "ё", "ж", "и", "о", "у", "ы", "э", "ю","я");
        $string = mb_str_split($_POST["text1"]);
        $count = strlen($_POST["text1"]);
        $sum = 0;
        for ($i = 0; $i <= 10; $i++) {
            for ($k = 0; $k <= $count; $k++){
                if ($char[$i] == $string[$k]) $sum++;
            }
        }
    echo ("Количество гласных, входящих в данный текст- ". $sum);   
    }
?>