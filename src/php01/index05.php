<?php

$a = 5;


if($a == 5){
    echo "\＄aは５です";
}else{
    echo "\＄aは５以外です";
}

echo "<br />";
++$a;
++$a;

if($a == 5){
    echo "\＄aは５です";
}else{
    echo "\＄aは５以外です";
}
echo "<br />";


if ($a == 5) {
echo "\$aは5です";
}elseif ($a == 7){
echo "\$aは7です";
}else{
echo "\$aは5と7以外です";
}


echo "<br />";


$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;

case "Jiro":
echo "次郎です";
break;

case "Saburo":
echo "三郎です";
break;
}

echo "<br />";

$result = ($a ==7) ? "TRUE" : "FALSE";

echo $result;

echo "<br />";

