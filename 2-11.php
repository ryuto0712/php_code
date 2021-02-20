<?php

$min = 1;
$max = 9;
$min2 = -9;
$max3 = -1;
$min3 = 10;
$max3 = 99;
echo "３個の乱数を生成しました。:";
echo "\n";
echo "1桁の正の整数:";
echo mt_rand($min,$max);
echo "\n";
echo "1桁の負の整数:";
echo mt_rand($min2,$max3);
echo "\n";
echo "2桁の正の整数:";
echo mt_rand($min3,$max3);