<?php
do{
echo '3桁の正の整数値:';
$x = trim(fgets(STDIN));

}while($x<100 || $x>999);
echo "$x と入力しましたね";