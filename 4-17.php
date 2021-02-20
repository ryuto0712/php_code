<?php

echo '何個★を表示しますか:';
$x = trim(fgets(STDIN));
$z = "★";
for($y = 0;$y!=$x;$y++){
    if($y%5==0 && $y != 0){
        echo"<br />";
    }
    echo $z;
}