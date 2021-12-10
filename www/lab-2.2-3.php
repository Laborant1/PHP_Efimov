<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php
echo'Ассоциативный массив: ';
$cust= array("cnum"=>"2001", "cname"=>"Hoffman", "city"=>"London", "snum"=>"1001");
print_r ($cust);
echo '<br><br>' . 'Добавление ключа со значением 100: ';
$cust["rating"] = 100;
foreach($cust as $k => $v)
echo  $k, ' => ', $v;
echo '<br><br>' . 'Сортировка по значениям: ';
asort($cust);
print_r($cust);
echo '<br><br>' . 'Сортировка по ключам: ';
ksort($cust);
print_r($cust);
echo '<br><br>' . 'Отсортированный массив: ';
sort($cust);
print_r($cust); 
?>