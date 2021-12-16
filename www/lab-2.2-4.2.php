<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php

$N = rand(1, 10);
$A = array($N);
$B = array($N);

echo('Массив А:');
for ($i = 0; $i<=$N-1; $i++){
    $A[$i] = rand(1, 10);
    echo($A[$i].' '); 
}
echo('<br>');

echo('Массив B:');
for ($i = 0; $i<=$N-1; $i++){
    $B[$i] = rand(1, 10);
    echo($B[$i].' '); 
}
echo('<br>');

sort($A);
echo('Отсортированный массив A: ');
for ($i = 0; $i<=$N-1; $i++){
    echo($A[$i].' '); 
}
echo('<br>');

sort($B);
echo('Отсортированный массив B: ');
for ($i = 0; $i<=$N-1; $i++){
    echo($B[$i].' '); 
}
echo('<br>');

for ($i = 0; $i<=$N-1; $i++){
    if ($A[$i] == $B[$i]) $schet += 1; 
}

if ($schet == $N) echo('Да');
else echo('Нет');
?>