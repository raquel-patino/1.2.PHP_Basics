<?php
declare(strict_types = 1);

$x= 5;
$y= 10;
$n= 2.50;
$m= 1.50;

echo $x . "<br>";
echo $y. "<br>";
echo ($x + $y). "<br>";
echo ($x - $y). "<br>";
echo ($x * $y). "<br>";
echo ($x % $y). "<br>";
echo ($n + $m). "<br>";
echo ($n - $m). "<br>";
echo ($n * $m). "<br>";
echo ($n % $m). "<br>";

echo ($x * 2). "<br>";
echo ($y * 2). "<br>";
echo ($n * 2). "<br>";
echo ($m * 2). "<br>";

echo ($x + $y + $n + $m). "<br>";
echo ($x * $y * $n * $m). "<br>";

echo calculadora(10, 5, "+");

function calculadora (int $numero1, int $numero2, string $operador) : string {
    
    switch($operador){
        case "*":
        $resultado= "El resultado es " . ($numero1 * $numero2);
        break;
        case "+":
        $resultado= "El resultado es " .($numero1 + $numero2);
        break;
        case "-":
        $resultado= "El resultado es " .($numero1 - $numero2);
        break;
        case "/":
        $resultado= "El resultado es " .($numero1 / $numero2);
        break;
    }
    return $resultado;
}

?>






