<?php

echo 'nの値:';
$x = trim(fgets(STDIN));
for($y = 1;$y<=$x; $y++){
    echo "$y の2乗は";
    $z = $y*$y;
    echo $z;
    echo "\n";
}