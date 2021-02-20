<?php
echo '右下直角の二等辺三角形を表示します:';
echo "\n";
echo '段数は:';
$x = trim(fgets(STDIN));
$z = "★";
$p = $x;
for($x;$x>=1;$x--){
    for($w = $x;$w != 1; $w--){
    echo "&nbsp";
    }
    for($j = 1;$j<=$p;$j++){
    echo $z;
    }
}