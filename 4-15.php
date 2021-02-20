<?php
echo '1からnまでの和を求めます:';
echo "\n";
echo 'nの値を:';
$x = trim(fgets(STDIN));
$t = $x;
for($x = 0;$t>=$x;$x++){
    echo $x."+";
    $z += $x; 
}
echo $z;