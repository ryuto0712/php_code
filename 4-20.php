<?php
do{
echo '季節を求めます:';
echo '何月ですか:';
$x = trim(fgets(STDIN));
}while($x>=13 || $x<=0);
do{
if($y==1){
    echo '何月ですか:';
    $x = trim(fgets(STDIN));
}
if($x>=3 && $x<=5){
    echo "その値は春です";
}elseif($x>=6 && $x<=8){
    echo "その値は夏です";
}elseif($x>=9 && $x<=11){
    echo "その値は秋です";
}elseif($x>=12 || $x<=2){
    echo "その値は冬です";
}
echo "もう一度？ 1・・・Yes/0・・・No:";
$y = trim(fgets(STDIN));
}while($y==1);