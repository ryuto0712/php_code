<?php
echo '整数a:';
$a = trim(fgets(STDIN));
echo '整数b:';
$b = trim(fgets(STDIN));
echo '整数c:';
$c = trim(fgets(STDIN));

if($a<$b){
    if($a>$c)
    echo "中央値は $a です";
    elseif($b==$c){
        echo "中央値は $b です";
    }
    else{
        echo "中央値は $a です";
    }
}elseif($a>$b){
    if($a<$c)
    echo "中央値は $a です";
    elseif($b==$c){
        echo "中央値は $b です";
    }
    else{
        echo "中央値は $a です";
    }
}elseif($b>$c){
    if($b<$a)
    echo "中央値は $b です";
    elseif($a==$c){
        echo "中央値は $a です";
    }
    else{
        echo "中央値は $b です";
    }
}elseif($b>$a){
    if($b<$c)
    echo "中央値は $b です";
    elseif($a==$c){
        echo "中央値は $a です";
    }
    else{
        echo "中央値は $b です";
    }
}elseif($c>$a){
    if($c<$b)
    echo "中央値は $c です";
    elseif($a==$b){
        echo "中央値は $a です";
    }
    else{
        echo "中央値は $c です";
    }
}elseif($c>$a){
    if($c<$b)
    echo "中央値は $c です";
    elseif($a==$b){
        echo "中央値は $a です";
    }
    else{
        echo "中央値は $c です";
    }
}elseif($a==$b && $a==$c){
    echo"中央値は $a です";
}else{

}