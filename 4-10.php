<?php
echo '正の整数値:';
$z = trim(fgets(STDIN));
$x = 1;
$y = 1;
$a = 1;
do{
    $a += ($a * $y);
    $y += 1;
}while($y != $z);
echo $a;