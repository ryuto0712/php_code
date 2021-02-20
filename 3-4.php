<?php
echo '変数A:';
$x = trim(fgets(STDIN));
echo '変数B:';
$y = trim(fgets(STDIN));
if(!($x%$y==0)){
    echo "BはAの約数ではありません";
}else{
    echo "BはAの約数です";
}