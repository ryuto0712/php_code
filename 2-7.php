<?php
echo '整数値:';
$stdin = trim(fgets(STDIN));
echo "最下位桁を除いた値は",$stdin/10,"です";
echo "\n";
echo "最下位桁は",$stdin%10,"です";

