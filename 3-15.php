<?php
echo '整数a:';
$a = trim(fgets(STDIN));
echo '整数b:';
$b = trim(fgets(STDIN));
echo '整数c:';
$c = trim(fgets(STDIN));

if($a<$b && $a<$c){
    echo "最小値は $a です";
}elseif($b<$a && $b<$c){
    echo "最小値は $b です";
}elseif($c<$a && $c<$b){
    echo"最小値は $c です";
}elseif($a==$b && $a==$c){
    echo"aとbとcは同じ値です";
}