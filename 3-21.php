<?php
echo '何月ですか:';
$month = trim(fgets(STDIN));

switch ($month){
    case"3":echo "春";
    break;
    case"4":echo "春";
    break;
    case"5":echo "春";
    break;
    case"6":echo "夏";
    break;
    case"7":echo "夏";
    break;
    case"8":echo "夏";
    break;
    case"9":echo "夏";
    break;
    case"10":echo "夏";
    break;
    case"11":echo "秋";
    break;
    case"12":echo "秋";
    break;
    case"1":echo "秋";
    break;
    case"2":echo "冬";
    break;
    default:echo "そんな月はありません";
    break;
}