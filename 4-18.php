<?php

echo '整数値:';
$x = trim(fgets(STDIN));
for($y = 1;$y <= $x; $y++){
    if($x%$y == 0 ){
        echo $y;
        echo"<br />";
    }
}