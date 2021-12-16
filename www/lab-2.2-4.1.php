<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php
$arr = array(1,2,3,-1,1,2,3,4,5,0,1,2);
$arr1 = array();
 
$i = 0;
 
foreach($arr as $v){
    if($v > 0){
        $i++;
    }else{
        $arr1[] = $i;
        $i = 0;
    }
}
print_r($arr);
echo '<br>.<br>';
echo 'Максимальное количество подряд идущих положительных элементов - ' . max($arr1);
?>