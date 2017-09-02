<?php 

$a = rand(1,6);
$b = rand(1,6);

echo $a . "<br>";
echo $b . "<br>";

if ($a == 6 && $b == 6) {
    echo "Bingo";
} else {
    echo "ne bingo!<br>";
}

if ($a == 3 || $b == 3) {
    echo "3 yra !<br><br><br>";
}

function go(){
    $game = [rand(1,6), rand(1,6)];
    return $game;
}

print_r (go());


