<?php
echo '実数a:';
$x = trim(fgets(STDIN));
echo '実数b:';
$y = trim(fgets(STDIN));

if($x>$y){
    $diff = $x - $y;
    if($diff>10){
        echo "それらの差は10以上です"; 
    }else{
        echo "それらの差は10以下です";
    }   
}
else{
    $diff = $y - $x;
    if($diff>10){
        echo "それらの差は10以上です"; 
    }else{
        echo "それらの差は10以下です";
    }
}
