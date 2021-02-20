<?php
echo '変数a:';
$x = trim(fgets(STDIN));
if($x<0){
    echo "正ではない値が入力されました";
}
elseif($x%10==0){
    echo "その値は10の倍数です";
}elseif($x%10!=0){
    echo "その値は10の倍数ではありません";
}