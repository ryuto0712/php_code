<?php

$min = 0;
$max = 2;

$a=mt_rand($min,$max);
if($a==0){
    echo "コンピュータが生成した手:グー";
}elseif($a==1){
    echo "コンピュータの生成した手:チョキ";
}else{
    echo "コンピュータの生成した手:パー";
}