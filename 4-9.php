<?php
echo '正の整数値の桁数を求めます:';
echo "\n";
echo '正の整数値:';
$x = trim(fgets(STDIN));
$y = 1;
do{
    $y += 1;
    $x = $x/10;
}while($x>1);
echo "その数は $y です";