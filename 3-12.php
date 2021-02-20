<?php
echo '実数a:';
$x = trim(fgets(STDIN));
echo '実数b:';
$y = trim(fgets(STDIN));

if($x>$y){
    echo "大きい方の値は $x です";
}elseif($x<$y){
    echo "大きい方の値は $y です";
}else{
    echo "aとbは同じ値です";
}