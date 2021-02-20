<?php
echo '変数a:';
$x = trim(fgets(STDIN));
echo '変数b:';
$y = trim(fgets(STDIN));
if($x>$y){
    echo "aの方が大きいです";
}elseif($x<$y){
    echo "bの方が大きいです";
}else{
    echo "aとbは同じです";
}