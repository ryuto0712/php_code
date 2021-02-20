<?php
echo '実数a:';
$x = trim(fgets(STDIN));
echo '実数b:';
$y = trim(fgets(STDIN));

if($x>$y){
    $diff = $x - $y;
}
else{
    $diff = $y - $x;
}
echo "それらの差は $diff です";