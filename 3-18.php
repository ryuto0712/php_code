<?php
echo '整数a:';
$a = trim(fgets(STDIN));
echo '整数b:';
$b = trim(fgets(STDIN));
echo "a>=bとなるようにソートしました";
echo "\n";
if($a<$b){
    echo "変数aは $b です";
    echo "\n";
    echo "変数bは $a です";
}else{
    echo "変数aは $a です";
    echo "\n";
    echo "変数bは $b です";
}