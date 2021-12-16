<html>
<head><title>Efimov Ivan</title></head>
</html>
<?php
  function raschet($a, $b) {
  $u1=abs($a-$b*$b);
  $t1=$b-$a;
  $u2=$a;
  $t2=$b-$a*$a;
  if($u1 >= 0) {
    if($t1 >= 0) {
      $f1=$u1;
    } else {
    $f1=$u1-2*$t1;
    }
  } else {
    if($t1 >= 0) {
      $f1=$t1;
    } else {
    $f1=$u1*$t1+3*$t1;
    }
  }
  if($u2 >= 0) {
    if($t2 >= 0) {
      $f2=$u2;
    } else {
    $f2=$u2-2*$t2;
    }
  } else {
    if($t2 >= 0) {
      $f2=$t2;
    } else {
    $f2=$u2*$t2+3*$t2;
    }
  }
  $z=$f1+$f2;
  echo '<br>z = ' . $f1 . " + " . $f2 . ";";
  echo '<br>Значение функции равно ' . $z .";";
  }

  $a=rand(-10,10);
  $b=rand(-10,10);
  echo 'a = ' . $a .'<br>'.'b = '. $b . ";";
  raschet($a, $b);
?>