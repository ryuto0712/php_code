<?php
echo '点数:';
$x = trim(fgets(STDIN));

if($x>59 && $x<70){
    echo "可";
}elseif($x>69 && $x<80){
    echo "良";
}elseif($x>79 && $x<101){
    echo "優";
}else{
    echo "不正な点数です";
}
