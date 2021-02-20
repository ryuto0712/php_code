<?php
echo '正方形を表示します:';
echo '段数は:';
$x = trim(fgets(STDIN));
$z = "★";
for($y = 0;$a!=$x;$y++){
    if($y!=0){
        echo $z;
    }
if($y==$x){
    $a++;
    $y=0;
    echo "\n";
}
}
