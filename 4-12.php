<?php
echo 'カウントダウンします:';
echo '正の整数値:';
$x = trim(fgets(STDIN));
for($x;$x>=0;$x--){
    echo $x;
}