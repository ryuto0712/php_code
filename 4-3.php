<?php
echo '数当てゲーム開始！！:';
echo "\n";
echo '10~99の数を当ててください:';
echo "\n";
$min = 10;
$max = 99;
$x = mt_rand($min,$max);

do{
    echo "いくつかな：";
    $y = trim(fgets(STDIN));

    if($y>$x){
        echo "もっと小さな数だよ";
    }elseif($y<$x){
        echo "もっと大きなかずだよ";
    }
}while($x != $y);
echo "\n";
echo "正解です";


