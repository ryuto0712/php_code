<?php
echo '整数a:';
$a = trim(fgets(STDIN));
echo '整数b:';
$b = trim(fgets(STDIN));

if($a==$b){
    echo "２つの値は同じです";
}elseif($a>$b){
    echo "小さい方の値は $b です";
    echo "\n";
    echo "大きい方の値は $a です";
}elseif($a<$b){
    echo "小さい方の値は $a です";
    echo "\n";
    echo "大きい方の値は $b です";
}