<?php
do{
echo '整数値:';
$x = trim(fgets(STDIN));
if($x>0)
    echo "その値は正です";
elseif($x<0)
    echo "その値は負です";

    echo "もう一度？ 1・・・Yes/0・・・No:";
    $y = trim(fgets(STDIN));
}while($y==1);