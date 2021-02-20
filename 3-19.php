<?php
echo '整数a:';
$a = trim(fgets(STDIN));
echo '整数b:';
$b = trim(fgets(STDIN));
echo '整数b:';
$c = trim(fgets(STDIN));
echo "a<=b<=cとなるようにソートしました";
echo "\n";
if($a>$b){
    $t=$a;
    $a=$b;
    $b=$t;
}
if($b>$c){
    $t=$b;
    $b=$c;
    $c=$t;
}
if($a>$b){
    $t=$a;
    $a=$b;
    $b=$t;
}
echo "変数aは $a です";
echo "変数bは $b です";
echo "変数cは $c です";