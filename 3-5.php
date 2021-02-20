<?php
echo '整数値:';
$x = trim(fgets(STDIN));
if($x>0){
    echo "その値は正です";
}elseif($x<0){
    echo "その値は負です";
}else{
    echo "その値は0です";
}