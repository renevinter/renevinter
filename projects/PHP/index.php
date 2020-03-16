<?php
$a = 4;
$b = 5;

//Aritmetické operátory

echo "<br> Sčítání = ";
echo $a+$b;
var_dump($a+$b);

echo "<br> Odčítání = ";
echo $a-$b;
var_dump($a-$b);

echo "<br> Násobení = ";
echo $a*$b;
var_dump($a*$b);

echo "<br> Dělení = ";
echo $a/$b;
var_dump($a/$b);

//Přirovnávací operátory

echo "<br> ";
echo $a++;
var_dump($a++);

echo "<br> ";
echo $a--;
var_dump($a--);

echo "<br> ";
echo $a += $b;
var_dump($a+=$b);

echo "<br>";
echo $a -= $b;
var_dump($a-=$b);

echo "<br>";
echo $a *= $b;
var_dump($a*=$b);

echo "<br>";
echo $a /= $b;
var_dump($a/=$b);

echo "<br> Rovnají se čísla?";
echo $a==$b;
var_dump($a==$b);

echo "<br> ";
echo $a!=$b;
var_dump($a!=$b);

echo "<br> Je $a větší než $b? <br>";
var_dump($a>$b);

echo "<br> Je $b větší než $a? <br>";
var_dump($a<$b);
?>

<?php


function isvalid($param1, $param2) {
    foreach ($param1 as $value) {
        if (strpos($param2, $value)) {
            echo "Zpráva obsahuje sprosté slovo.";
        }
    }
    return false;
}

$slova = array("hovno", "naprd");
$veta = "Někteří lidé jsou naprd.";

var_dump(isvalid($slova, $veta));
?>