<?php
echo '整数値:';
$x = trim(fgets(STDIN));
echo "その値±5の乱数を生成しました。:";
echo "\n";
echo "値は:",mt_rand($x-5,$x+5),"です";