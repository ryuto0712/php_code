<?php
echo 'カウントアップします:';
echo '正の整数値:';
$x = trim(fgets(STDIN));
$t = $x;
for($x = 0;$t>=$x;$x++){
    echo $x;
}