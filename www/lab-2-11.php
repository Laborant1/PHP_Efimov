<html>
<head><title>Efimov Ivan</title></head>
</html>
<p>Вариант 4
<p>  
<?php
$a = rand(1, 50);
$b = rand(51, 200);
print ("<p> Числа из отрезка [".$a.",".$b."] делящиеся на каждую из своих цифр<br>");
 
for ($i = $a; $i <= $b; $i++) {
    $str = (string)$i;
    
    for($j = 0; $j < strlen($str); $j++){
        if((int)$str[$j] == 0){
            break;
        }
        if(($j == strlen($str) - 1) && ($i % (int)$str[$j] == 0)){
            echo $i . '<br>';
            break;
        }
        if($i % (int)$str[$j] == 0){
            continue;
        } else{
            break;  
        }
    }
}
?>
<p> Вариант 7
<p>
<?php
$n = rand(1,499);
$p=0;
for ($i = 0; $i < (sqrt($n)+1); $i++) {
    for ($j = 0; $j < (sqrt($n)+1); $j++) {
		for ($k = 0; $k < (sqrt($n)+1); $k++) {
        if (($i*$i + $j*$j + $k*$k) == $n) echo "Можно для числа ".$n. '<br>'; 
    }
	}
}

?>