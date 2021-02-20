<?php
echo '左下直角の二等辺三角形を表示します:';
echo "\n";
echo '段数は:';
$x = trim(fgets(STDIN));
$z = "★";
for($x = 1;$x<=5;$x++){
    for($w = 0;$x != $w; $w++){
    echo $z;
    }
    echo "\n";
}

echo '左下直角の二等辺三角形を表示します:';
echo "\n";
echo '段数は:';
$x = trim(fgets(STDIN));
$z = "★";
for($x;$x>=1;$x--){
    for($w = $x;$w != 0; $w--){
    echo $z;
    }
    echo "\n";
}

<?php
echo '右下直角の二等辺三角形を表示します:';
echo "\n";
echo '段数は:';
$x = trim(fgets(STDIN));
$z = "★";
for($x;$x>=1;$x--){
    for($w = $x;$w != 1; $w--){
    echo "&nbsp";
    }
    echo "\n";
}











