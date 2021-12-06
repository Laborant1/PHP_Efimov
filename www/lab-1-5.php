<html>
<head><title>Efimov Ivan</title></head>
</html>
<p>Вариант 4
<p>  
   <?php
        $a=rand(-20,20);
        $c=rand(-20,20);
        $d=rand(-20,20);
        $res=(($c+(4*$d)-12)/(1-($a/2)));
        echo('('.$c.'+(4*'.$d.')-12)/(1-('.$a.'/2))'.'='.$res);
?>