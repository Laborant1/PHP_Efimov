<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php
$m = array(10);
$n = array(10);

for ($i = 0; $i <= 9; $i++) {
    $m[$i] = rand (-100, 100);
    $n[$i] = rand (-100, 100);
}

$P = array($m, $n);
?>
<a>Массив данных:</a>
<TABLE border=1>
<?php 
for ($i=0; $i<=1; $i++) { 
    
    echo ("<tr>"); 
    for ($k=0; $k<=9; $k++) { 
    echo ("<td align=center>");  
    echo ($P[$i][$k]);
    echo ("</td>");
    }
    echo ("</tr>");
}
?>
</TABLE>

<?php
$max1 = min($m);
$max2 = min($n);

for ($i = 0; $i <= 9; $i++) {
    if ($m[$i] < 0 and $m[$i] > $max1) $max1 = $m[$i];
    if ($n[$i] < 0 and $n[$i] > $max2) $max2 = $n[$i];
}

$max = max($max1, $max2);
echo('Наибольший отрицательный элемент массива = '.$max.'<br>');

?>