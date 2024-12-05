<?php
declare(strict_types = 1);
$contador=2;
$numero=15;
contadorNumero (2);

function contadorNumero ($contador, int $num = 10) : void  {
$i=0;

    while (($i + $contador) <= $num) {
        $i = $i + $contador;
        echo $i;
    }
}
?>
