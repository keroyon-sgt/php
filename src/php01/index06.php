<?php


for ($i = 1; $i <= 5; $i++) {
    echo $i*2;
    echo "<br />";

}

    echo "<br />";

$count = 0;

while ($count < 20) {

    $count += 1;
    if($count==5){
        echo '. . . <br />';
    }elseif($count<5 || $count >= 19){
        echo $count . '<br />';
    }
}

echo "<br />";

$count = 0;

while ($count <= 100) {

    $count += 1;
    $i += 1;

    if($count % 3 == 0){
        $i = 0;
        continue;
    }
    if($count == 20){
        break;
    }
    echo $count . '<br />';

}

echo "<br />";


$i = 0;
do {
    echo 'num = ' . $i . '<br />';
    $i++;
} while ($i < 3);

echo "<br />";

$fizz = 'Fuzz';
$buzz = 'Buzz';

for ($i = 1; $i <= 50; $i++) {
    
    if($i % 3 === 0){
        echo $fizz;
    }

    if($i % 5 === 0){
        echo $buzz;
    }

    if($i % 3 && $i % 5){
        echo $i;
    }

    echo "<br />";

}


echo "<br />";



for ($i=0; $i < 5; $i++) { 

    for($j=0; $j < 5; $j++){
            echo '●';
    }
    echo "<br />";
    
}



echo "<br />";