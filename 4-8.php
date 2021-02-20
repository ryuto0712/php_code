<?php
echo '何個表示しますか:';
$x = trim(fgets(STDIN));
$y = 0;
do{
    
    $y += 1;
    if($y%2 != 0){
    $z .= "★";
    }elseif($y%2 == 0){
    $z .= "+";
    }
}while($x != $y);
echo $z;