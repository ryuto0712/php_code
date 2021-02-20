<?php

echo '何個★を表示しますか:';
$x = trim(fgets(STDIN));
$y = 0;
do{
    $y += 1;
    $z .= "★";

}while($x != $y);
echo $z;
