<?php
echo '変数a:';
$x = trim(fgets(STDIN));
if($x<0){
    echo "正ではない値が入力されました";
}
elseif($x%5==0){
    echo "その値は5で割り切れます";
}elseif($x%5!=0){
    echo "その値は5で割り切れません";
}