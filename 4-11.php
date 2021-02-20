<?php

echo '何個★を表示しますか:';
$x = trim(fgets(STDIN));
$z = "★";
for($y = 0;$y!=$x;$y++){
    echo $z;
}