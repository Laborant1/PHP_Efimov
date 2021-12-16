<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php

$a = rand(-10, 10);
$b = rand(-10, 10);
echo('a = '.$a.'<br>'.'b = '.$b.'<br>');

$a1 = $a;
$a2 = pow($a, 2) / 3;
$a3 = ($a - 1) / $b;

$b1 = $b - 1;
$b2 = pow($b, 3);
$b3 = $b * $a - 4;

$u = array($a1, $a2, $a3);
$t = array($b1, $b2, $b3);

for ($i = 0; $i <=2; $i++) {
    if ($u[$i] > 0 and $t[$i] > 0) $f[$i] = pow($u[$i], 2) + $t[$i];
    else if ($u[$i] <= 0 and $t[$i] <= 0) $f[$i] = $u[$i] + pow($t[$i], 2) / 3;
    else if ($u[$i] > 0 and $t[$i] <= 0) $f[$i] = 2 * $u[$i] + $t[$i];
    else $f[$i] = pow($u[$i], 2) - $t[$i];
    $f[$i] = round($f[$i], 2);
}

echo ('f(a, b - 1) = '.$f[0].'<br>');
echo ('f((a^2) / 3, b^3) = '.$f[1].'<br>');
echo ('f((a - 1) / b, b * a - 4) = '.$f[2].'<br>');

$sum = $f[0] + $f[1] - $f[2];
echo('Значение функции равно '.$sum.'<br>');


?>