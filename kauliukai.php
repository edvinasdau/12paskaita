<?php 

$a = rand(1,6);
$b = rand(1,6);

echo $a . "<br>";
echo $b . "<br>";

if ($a == 6 && $b == 6) {
    echo "Bingo";
} else {
    echo "ne bingo!<br><br><br>";
}

if ($a == 3 || $b == 3) {
    #echo "3 yra !<br>";
}

function go(){
    $game = [rand(1,6), rand(1,6)];
    return $game;
}

function check($aaa){
    $result ="";

    if ($aaa[0] == 6 && $aaa[1] == 6){
        $result .= "Bingo!";
    }

    if ($aaa[0] == $aaa[1]) {
        $result .= " Vienodi kauliukai";
    }

    if($aaa[0] < 3 && $aaa[1] < 3){
        $result .= " Pralosei!";
    }

    return $result;

}

echo "<table>";
echo "<tr><td>Zaidimo nr</td><td>Kauliukas A</td><td>Kauliukas B</td><td>Suma</td><td>Rezultatas</td></tr>";
for ($i=1 ; $i <= 30 ; $i++ ) { 
    $game = go();
    echo "<tr><td>" . $i . "</td><td>" . $game[0] . "</td><td>" . $game[1] . "</td><td>" . array_sum($game) . "</td><td>" . check($game) . "</td></tr>";
}

echo "<table>";
