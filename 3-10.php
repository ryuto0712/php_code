<?php
echo '整数値:';
$x = trim(fgets(STDIN));
if($x<0){
    echo "正ではない値が入力されました";
}
elseif($x%3==0){
    echo "その値は3で割り切れます";
}elseif($x%3!=0){
    $x = $x%3;
    echo "その値を3で割った余は $x です";
}