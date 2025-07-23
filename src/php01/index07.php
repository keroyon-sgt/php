<?php

echo "<br />";

function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 3);
echo $total;


echo "<br />";

function judgment($score1, $score2, $score3)
{
    $qualify = 210;

    echo '合計点は'.$qualify.'点なので';
    
    $total_score = $score1 + $score2 + $score3;

    if($total_score>=$qualify){
        echo '合格です';
    }else{
        echo '不合格です';
    }

}

echo judgment(0, 100, 100);

echo "<br />";

function measure_triangle($base, $height){

    $area=$base*$height*0.5;
    echo '底辺が'.$base.'cm、高さ'. $height.'㎝のとき、面積は'.$area.'㎠です';
}


function measure_square($base, $height){

    $area=$base*$height;
    echo '底辺が'.$base.'cm、高さ'. $height.'㎝のとき、面積は'.$area.'㎠です';
}


function measure_trapezoid($base, $top, $height){

    $area=($base+$top)*$height*0.5;
    echo '底辺が'.$base.'cm、上底が'. $top.'cm、高さ'. $height.'㎝のとき、面積は'.$area.'㎠です';
}

echo measure_triangle(60, 120)."<br />";
echo measure_square(60, 120)."<br />";
echo measure_triangle(30, 40,120)."<br />";



echo "<br />";


echo "<br />";


echo "<br />";


echo "<br />";