<?php
echo "３個の整数を生成しました";
echo "\n";
echo "0.0以上 1.0未満:";
$min = 0.0; $max = 1.0;
echo $rand_f = $min + mt_rand() / mt_getrandmax()*($max - $min);
echo "\n";
echo "0.0以上10.0未満:";
$min = 0.0; $max = 10.0;
echo $rand_f = $min + mt_rand() / mt_getrandmax()*($max - $min);
echo "\n";
echo "-1.0以上1.0未満:";
$min = -1.0; $max = 1.0;
echo $rand_f = $min + mt_rand() / mt_getrandmax()*($max - $min);
