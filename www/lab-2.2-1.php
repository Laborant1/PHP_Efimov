<?php
 $treug=array(1,2,3,4,5,6,7,8,9,10);
 $kvd=array(1,2,3,4,5,6,7,8,9,10);
 $rez=array();
 $rez1=array();
echo'Массив треугольных чисел: ';
foreach($treug as $k=>$n) {
    $treug[$k]=$n*($n+1)/2;
    echo $treug[$k] .'&nbsp;&nbsp;';
   }
    echo '<br>.<br>';
 echo'Массив квадратов натуральных чисел: ';
 foreach($kvd as $a=>$b) {
    $kvd[$a]=$b*$b;
    echo $kvd[$a].'&nbsp;';
    }
 echo '<br>.<br>';
 echo'Массив результат: ';
 $rez=array_merge($treug,$kvd);
 print_r($rez);
 echo '<br>.<br>';
 echo'Отсортированный массив: ';
 sort($rez);
 reset($rez);
 while (list($key, $val) = each($rez)) {
 echo "rez  [" . $key . "] = " . $val . "\n";
}
 echo '<br>.<br>';
 echo'Массив с удаленным первым элементом: ';
array_shift($rez);
print_r($rez);
 echo '<br>.<br>';
 echo'Массив с удаленныи повторяющимся элементом : ';
 $rez1 = array_unique($rez);
print_r($rez1);
?>