<?php
echo '整数値:';
$x = trim(fgets(STDIN));
echo '整数値:';
$y = trim(fgets(STDIN));

if($x>$y){
    $t = $x;
    $x = $y;
    $y = $t;
}
$x -= 1;
do{
    if($x<$y){
        $x += 1;
        echo $x; 
        echo "\n";
    }
}while($x<$y);