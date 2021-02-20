<?php
echo '何cmから:';
$x = trim(fgets(STDIN));
echo '何cmから:';
$y = trim(fgets(STDIN));
echo '何cmごと:';
$z = trim(fgets(STDIN));
echo '身長 体重標準:';
echo "\n";
echo '-----------';
echo "\n";

for($x;$x<$y;$x+=$z){
    echo $x;  
    echo "&nbsp";
    $w = ($x-100)*0.9;
    echo $w;  
    echo "\n";
}
