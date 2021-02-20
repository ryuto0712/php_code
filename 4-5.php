<?php
echo 'カウントダウンします:';
echo '整数値:';
$x = trim(fgets(STDIN));
do{
if($x<0){
    echo '整数値:';
    $x = trim(fgets(STDIN));
}
}while($x<0);
$x += 1;
do{
    if($x>0){
        $x -= 1;
        echo $x; 
        echo "\n";
    }
}while($x>0);
echo "xの値は-1になりました";